<!DOCTYPE html>
<html>
<head>
    <title>Gate QR Scan</title>
    <script src="https://unpkg.com/html5-qrcode"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
       <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;      /* center horizontally */
        }
        
        
        
        </style>
</head>
<body>
    <h2 style="margin-top:50px;      
            margin-bottom: 10px;
            text-align: center;font-size:50px !important;">Security Gate QR Scan</h2>
            
    <div id="insideCounter" style="font-size:20px; margin-bottom:20px;">
        <h2 style="font-size:30px !important;">Visitors inside: 0</h2>
    </div>            

    <div id="reader" style="width:600px;"></div>
    <div id="result" style="margin-top:20px;"></div>

    <script>
        const reader = new Html5Qrcode("reader");
        
        
            // Play a short beep using browser Audio API
        function playBeep() {
            const ctx = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = ctx.createOscillator();
            oscillator.type = 'square';
            oscillator.frequency.setValueAtTime(1000, ctx.currentTime); // 1000 Hz beep
            oscillator.connect(ctx.destination);
            oscillator.start();
            oscillator.stop(ctx.currentTime + 0.2); // 0.2 second beep
        }
    
        function flashRed() {
            document.body.classList.add('flash-red');
            setTimeout(() => {
                document.body.classList.remove('flash-red');
            }, 500);
        }
    
        function updateInsideCounter() {
            fetch('/security/inside-count')
                .then(res => res.json())
                .then(data => {
                    document.getElementById('insideCounter').innerText = `Visitors inside: ${data.inside}`;
                });
        }
    
        setInterval(updateInsideCounter, 5000);
        updateInsideCounter();

        function onScanSuccess(qrMessage) {
            fetch("/security/verify", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ qr_token: qrMessage, gate_name: "Main Gate" })
            })
            .then(response => response.json())
            .then(data => {
                const resultDiv = document.getElementById('result');

                if(data.status === 'entry_approved'){
                    playBeep(); // ðŸ”Š Play browser beep
                    resultDiv.innerHTML = `
                        <p style="color:green; font-weight:bold;">ENTRY GRANTED</p>
                        <p>Visitor: ${data.visitor}</p>
                        <p>Resident: ${data.resident}</p>
                    `;
                    updateInsideCounter();
                }
                else if(data.status === 'exit_logged'){
                    resultDiv.innerHTML = `
                        <p style="color:blue; font-weight:bold;">EXIT RECORDED</p>
                        <p>Goodbye ${data.visitor}</p>
                    `;
                    updateInsideCounter();
                }
                else if(data.status === 'already_exited'){
                    resultDiv.innerHTML = `<p style="color:red; font-weight:bold;">Visitor Already Exited</p>`;
                }
                else if(data.status === 'not_today'){
                    resultDiv.innerHTML = `<p style="color:red; font-weight:bold;">Visit Not Scheduled Today</p>`;
                }
                else if(data.status === 'outside_time_window'){
                    resultDiv.innerHTML = `<p style="color:red; font-weight:bold;">Outside Allowed Time Window</p>`;
                }
                else {
                    flashRed();
                    resultDiv.innerHTML = `<p style="color:white; font-weight:bold;">Invalid QR Code</p>`;
                }
            
            })
            .catch(err => console.error(err));
        }

        reader.start(
            { facingMode: "environment" },
            { fps: 10, qrbox: 400 },
            onScanSuccess
        );
    </script>
</body>
</html>
