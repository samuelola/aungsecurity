<!DOCTYPE html>
<html>
<head>
    <title>Gate QR Scan</title>
    <script src="https://unpkg.com/html5-qrcode"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f4f6f9;
        }

        h2 {
            margin-top: 20px;
            font-size: 28px;
        }

        #insideCounter {
            font-size: 20px;
            margin-bottom: 10px;
        }

        /* FULLSCREEN MOBILE SCANNER */
        #reader {
            width: 95vw;
            max-width: 700px;
            margin: 10px auto;
        }

        #reader video {
            height: 70vh !important;
            object-fit: cover;
            border-radius: 10px;
        }

        #reader__scan_region {
            min-height: 60vh !important;
        }

        #result {
            margin-top: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        /* GREEN SUCCESS FLASH */
        .flash-green {
            animation: greenFlash 0.5s ease-in-out;
        }

        @keyframes greenFlash {
            0% { background-color: rgba(0,0,0,0); }
            50% { background-color: rgba(0,255,0,0.7); }
            100% { background-color: rgba(0,0,0,0); }
        }

        /* RED ERROR FLASH */
        .flash-red {
            animation: redFlash 0.5s ease-in-out;
        }

        @keyframes redFlash {
            0% { background-color: rgba(0,0,0,0); }
            50% { background-color: rgba(255,0,0,0.7); }
            100% { background-color: rgba(0,0,0,0); }
        }

        /* BUTTONS AND DROPDOWNS */
        #reader button {
            font-size: 20px !important;
            padding: 14px 18px !important;
            border-radius: 10px !important;
            margin: 8px 4px !important;
        }

        #reader__dashboard button {
            font-size: 22px !important;
            padding: 16px !important;
        }

        #reader select {
            font-size: 18px !important;
            padding: 12px !important;
            width: 100% !important;
            margin-top: 10px !important;
        }

        /* MOBILE STYLING */
        @media (max-width: 768px) {
            #reader button {
                font-size: 24px !important;
                padding: 20px !important;
                width: 100% !important; /* FULL-WIDTH */
            }
            #reader__dashboard button {
                width: 100% !important;
                height: 70px !important; /* extra tall for easy tapping */
                font-size: 26px !important;
            }
            #reader select {
                font-size: 20px !important;
            }
        }
    </style>
</head>

<body>

<h2>Security Gate QR Scan</h2>
<div id="insideCounter">Visitors inside: 0</div>
<div id="reader"></div>
<div id="result"></div>

<script>
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    function playBeep() {
        const ctx = new (window.AudioContext || window.webkitAudioContext)();
        const osc = ctx.createOscillator();
        osc.type = 'square';
        osc.frequency.setValueAtTime(1000, ctx.currentTime);
        osc.connect(ctx.destination);
        osc.start();
        osc.stop(ctx.currentTime + 0.2);
    }

    function flashGreen() {
        document.body.classList.add('flash-green');
        setTimeout(() => document.body.classList.remove('flash-green'), 500);
    }

    function flashRed() {
        document.body.classList.add('flash-red');
        setTimeout(() => document.body.classList.remove('flash-red'), 500);
    }

    function updateInsideCounter() {
        fetch('/security/inside-count')
            .then(res => res.json())
            .then(data => {
                document.getElementById('insideCounter').innerText =
                    `Visitors inside: ${data.inside}`;
            });
    }

    setInterval(updateInsideCounter, 5000);
    updateInsideCounter();

    let scanLock = false;
    function onScanSuccess(decodedText) {
    
    if (scanLock) return;   // 🚫 block repeat scans
    scanLock = true;        // 🔒 lock scanner    
        
    const resultDiv = document.getElementById('result');

    fetch("/security/verify", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
        },
        body: JSON.stringify({ qr_token: decodedText, gate_name: "Main Gate" })
        
    })
    .then(async response => {
        // Handle HTTP errors FIRST
        if (!response.ok) {
            let errorText = `SERVER ERROR (${response.status})`;

            if (response.status === 419) errorText = "CSRF TOKEN MISMATCH";
            if (response.status === 500) errorText = "SERVER CRASH (500)";
            if (response.status === 404) errorText = "VERIFY ROUTE NOT FOUND";

            flashRed();
            resultDiv.innerHTML = `<div style="color:white; font-size:22px;">${errorText}</div>`;
            throw new Error(errorText);
        }

        return response.json();
    })
    .then(data => {

        if(data.status === 'entry_approved'){
            playBeep();
            flashGreen();
            resultDiv.innerHTML = `
                <div style="color:green; font-size:26px;">ENTRY GRANTED</div>
                Visitor: ${data.visitor}<br>
                Resident: ${data.resident}
            `;
            updateInsideCounter();
        } 
        else if(data.status === 'exit_logged'){
            resultDiv.innerHTML = `
                <div style="color:blue; font-size:24px;">EXIT RECORDED</div>
                Goodbye ${data.visitor}
            `;
            updateInsideCounter();
        } 
        else if(data.status === 'already_exited'){
            flashRed();
            resultDiv.innerHTML = `<div style="color:white; font-size:22px;">ALREADY EXITED</div>`;
        }
        else if(data.status === 'not_today'){
            flashRed();
            resultDiv.innerHTML = `<div style="color:white; font-size:22px;">NOT SCHEDULED FOR TODAY</div>`;
        }
        else if(data.status === 'outside_time_window'){
            flashRed();
            resultDiv.innerHTML = `<div style="color:white; font-size:22px;">OUTSIDE TIME WINDOW</div>`;
        }
        else {
            flashRed();
            resultDiv.innerHTML = `<div style="color:white; font-size:22px;">INVALID QR</div>`;
        }
        
        // 🔓 allow scanning again after 3 seconds
        setTimeout(() => scanLock = false, 3000);

    })
    .catch(error => {
        console.error("Scan Error:", error);
    });
}


    const scanner = new Html5QrcodeScanner("reader", {
        fps: 10,
        qrbox: function(w, h) {
            let minEdge = Math.min(w, h);
            let size = Math.floor(minEdge * 0.75);
            return { width: size, height: size };
        }
    });

    scanner.render(onScanSuccess);

    // REMOVE "SCAN AN IMAGE FILE" OPTION
    const observer = new MutationObserver(() => {
        document.querySelectorAll('[id*="dashboard_section_swaplink"]').forEach(el => el.remove());
        document.querySelectorAll('input[type="file"]').forEach(el => {
            const parent = el.closest('div');
            if (parent) parent.remove();
        });
    });

    observer.observe(document.body, { childList: true, subtree: true });

    // AUTO-SELECT BACK CAMERA
    setTimeout(() => {
        const select = document.querySelector('select');
        if(select){
            select.selectedIndex = select.options.length - 1;
            select.dispatchEvent(new Event('change'));
        }
    }, 1000);
</script>
</body>
</html>
