<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gate Access Verification</title>

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
                <h4 class="mb-0">🛂 Gate Access Verification</h4>
            </div>

            <div class="card-body p-4">

                <form id="verifyForm">
                    @csrf

                    <div class="mb-4 text-center">
                        <label class="form-label fw-semibold fs-5">Enter Visitor Access Code</label>
                        <input 
                            type="number" 
                            name="code" 
                            id="codeInput"
                            class="form-control form-control-lg text-center tracking-wide shadow-sm"
                            placeholder="••••••"
                            
                        >
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg rounded-3 shadow-sm">
                            Verify Pass
                        </button>
                    </div>
                </form>

                <!-- RESULT DISPLAY -->
                <div id="resultBox" class="mt-4 text-center" style="display:none;">
                    <div id="resultMessage" class="fw-bold fs-4"></div>
                    <div id="visitorInfo" class="mt-2"></div>
                </div>

            </div>

            <div class="card-footer text-center small text-muted">
                Estate Security System • Authorized Use Only
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
    const visitorInfo = $("#visitorInfo");

    codeInput.focus();

    $("#verifyForm").on("submit", function(e) {
        e.preventDefault();

        

        $.ajax({
            url: "{{ route('security.verify') }}",
            type: "POST",
            data: {
                code: codeInput.val(),
                gate_name: "Main Gate",
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {

                resultBox.show();
                visitorInfo.html("");

                if (data.status === "success") {
                     playBeep();
                    resultMessage.removeClass().addClass("fw-bold fs-4 text-success").text(data.message);

                    visitorInfo.html(`
                        <div class="card mt-3 shadow-sm border-success">
                            <div class="card-body">
                                <h5 class="card-title">Visitor: ${data.visitor}</h5>
                                <p class="card-text">Resident: ${data.resident}</p>
                                <span class="badge bg-${data.type === 'entry' ? 'success' : 'warning'}">
                                    ${data.type.toUpperCase()}
                                </span>
                            </div>
                        </div>
                    `);

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
                resultMessage.removeClass().addClass("fw-bold fs-4 text-danger").text("Server Error");
                codeInput.val("").focus();
            }
        });

    });
});
</script>


</body>
</html>
