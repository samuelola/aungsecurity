<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gate Emergency Access Verification</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('aung_favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('aung_favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('aung_favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('aung_favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('aung_favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('aung_favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('aung_favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('aung_favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('aung_favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('aung_favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('aung_favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('aung_favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('aung_favicon/favicon-16x16.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* body {
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        } */
        .tracking-wide {
            letter-spacing: 6px;
            font-weight: bold;
            font-size: 28px;
        }
        .card {
            backdrop-filter: blur(8px);
        }
        .flash-success {
            animation: flashGreen 0.6s ease-in-out;
        }
        .flash-error {
            animation: flashRed 0.6s ease-in-out;
        }
        @keyframes flashGreen {
            0% { background-color: #d4edda; }
            100% { background-color: white; }
        }
        @keyframes flashRed {
            0% { background-color: #f8d7da; }
            100% { background-color: white; }
        }
    </style>
</head>

<body>

<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4">

            <div class="card-header bg-dark text-white text-center rounded-top-4">
                <h4 class="mb-0">🛂 Gate Emergency Offline Access Verification</h4>
            </div>

            <div class="card-body p-4">

                <form id="verifyEmergencyForm">
                    @csrf

                    <div class="mb-4 text-center">
                        <label class="form-label fw-semibold fs-5">Enter Resident ID</label>
                        <input type="text" name="resident_id" id="resident_id" 
                        class="form-control form-control-lg text-center tracking-wide shadow-sm"/>
                        
                    </div>

                    <div class="mb-4 text-center">
                        <label class="form-label fw-semibold fs-5">Enter Emergency Access Pin</label>
                        <input 
                            type="number" 
                            name="code" 
                            id="codeInput"
                            class="form-control form-control-lg text-center tracking-wide shadow-sm"
                            placeholder="••••••"
                            
                        >
                       
                        
                    </div>
                    

                    <div class="d-grid">
                        <button type="submit" class="btn btn-danger btn-lg rounded-3 shadow-sm">
                            Verify Pass
                        </button>
                    </div>
                </form>

                <!-- RESULT DISPLAY -->
                <div id="resultBox" class="mt-4 text-center" style="display:none;">
                    <div id="resultMessage" class="fw-bold fs-4"></div>
                    
                </div>

            </div>

            <div class="card-footer text-center small text-muted">
                Estate Emergency Security System • Authorized Use Only
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function () {

    function playBeep() {
        const ctx = new (window.AudioContext || window.webkitAudioContext)();
        const osc = ctx.createOscillator();
        osc.type = 'square';
        osc.frequency.setValueAtTime(1000, ctx.currentTime);
        osc.connect(ctx.destination);
        osc.start();
        osc.stop(ctx.currentTime + 0.2);
    }

    const codeInput = $("#codeInput");
    const resultBox = $("#resultBox");
    const resultMessage = $("#resultMessage");


    var residentId = $('#resident_id').val();

    codeInput.focus();

    $("#verifyEmergencyForm").on("submit", function(e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('emergency_verify') }}",
            type: "POST",
            data: {
                emergency_pin: codeInput.val(),
                resident_id : residentId
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {

                resultBox.show();

                if (data.status === "success") {
                     playBeep();
                    resultMessage.removeClass().addClass("fw-bold fs-4 text-success").text(data.message);

                    $("body").addClass("flash-success");
                    setTimeout(() => $("body").removeClass("flash-success"), 600);

                } else {
                    resultMessage.removeClass().addClass("fw-bold fs-4 text-danger").text(data.message);

                    $("body").addClass("flash-error");
                    setTimeout(() => $("body").removeClass("flash-error"), 600);
                }

                codeInput.val("").focus();
            },
            error: function(xhr) {
                resultBox.show();
            
                let message = "Server Error";
            
                // Laravel validation error (422)
                if (xhr.status === 422) {
                    const errors = xhr.responseJSON.errors;
            
                    if (errors.code) {
                        message = errors.code[0];
                    }
                }
            
                resultMessage
                    .removeClass()
                    .addClass("fw-bold fs-4 text-danger")
                    .text(message);
            
                $("body").addClass("flash-error");
                setTimeout(() => $("body").removeClass("flash-error"), 600);
            
                codeInput.val("").focus();
            }
        });

    });
});
</script>


</body>
</html>
