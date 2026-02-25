@extends('auth.auth_master')

@section('content')

<style>


input {
  cursor: text !important;
}

.otp-input {
    width: 50px;
    height: 50px;
    font-size: 24px;
    text-align: center;
    border-radius: 8px;
}

.otp-input:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 5px rgba(13,110,253,.3);
}

#countdownTimerr {
    font-weight: 600;
    font-size: 14px;
}

</style>


   <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7 login_one_image">
          
          <img class="bg-img-cover bg-center" src="{{asset('assets/images/login/man_login.jpg')}}" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          @if(session('error'))
                
                <div class="fade show alert alert-dismissible alert-danger bg-danger-600 text-white border-danger-600 px-24 py-11 mb-0 fw-semibold text-lg radius-8 d-flex align-items-center justify-content-between" role="alert">
                    {!! session('error') !!}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
               
              
          @endif
          @if(session('success'))
                 <div class="fade show alert alert-dismissible alert-success bg-danger-600 text-white border-danger-600 px-24 py-11 mb-0 fw-semibold text-lg radius-8 d-flex align-items-center justify-content-between" role="alert">
                   {!! session('success') !!}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
          @endif
          <div class="login-card login-dark login-bg">
            <div>
              <div>
                <a class="logo" href="#">
                  <img class="img-fluid for-light m-auto" style="width:100px;height:100px;" src="{{asset('aung_logo_white.png')}}" alt="looginpage">
                  <img class="for-dark" src="{{asset('aung_logo_blue.png')}}" style="width:120px;height:100px;" alt="logo">
                </a>
              </div>
              <div class="login-main"> 
                
                <form class="theme-form" action="{{route('verifypasscode',$tenant->subdomain)}}" method="post" id="otpResetForm">
                  @csrf
                  <!-- <input type="hidden" name="email" value="{{ session('reset_email') }}"> -->
                  <h4 class="text-center">{{ucfirst($tenant->estate_name)}} Estate</h4>
                  <h2 class="text-center">Verify Code</h2>
                  <p>Enter the 4-digit code sent to Reset Password</p>
                  <div id="countdownTimerr" class="text-danger"></div>
                  <div class="form-group">
                   
                    
                    <div id="otpInputs" style="display:flex; justify-content:center; gap:10px;">
                      <input type="text" maxlength="1" class="otp-input form-control text-center" name="code1" />
                      <input type="text" maxlength="1" class="otp-input form-control text-center" name="code2" />
                      <input type="text" maxlength="1" class="otp-input form-control text-center" name="code3" />
                      <input type="text" maxlength="1" class="otp-input form-control text-center" name="code4" />
                    </div>

                    <input type="hidden" name="code" id="full-code">
                    @error('code')
                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>

                
                    <div class="text-end mt-3">
                        <button id="resetBtn" class="btn btn-primary btn-block w-100" type="submit">Verify Code</button>
                    </div>
                  </div>
                 
                  
                  <p class="mt-4 mb-0 text-center"><span style="color:#292929">Don't have account?<span><a style="font-weight:600;" class="ms-2" href="{{route('tenant_user_reg',$tenant->subdomain)}}">Create Account</a></p>
                </form>
                <p class="text-center mt-3">
                    Didn't receive the code?
                    <button type="button" id="resendBtnn" 
                            class="btn btn-link p-0" disabled>
                        Resend
                    </button>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('script')

<script>
function togglePassword(element) {
  const input = element.previousElementSibling;

  if (input.type === "password") {
    input.type = "text";
    element.textContent = "hide";
  } else {
    input.type = "password";
    element.textContent = "show";
  }
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {  
const inputs = document.querySelectorAll(".otp-input");
const resetform = document.getElementById("otpResetForm");
const resetBtn = document.getElementById("resetBtn");
const resendBtnn = document.getElementById("resendBtnn");
const countdownEl = document.getElementById("countdownTimerr");

let countdownInterval = null;

// =======================
// OTP INPUT LOGIC
// =======================

inputs.forEach((input, index) => {

    input.addEventListener("input", () => {
        input.value = input.value.replace(/[^0-9]/g, '');

        if (input.value.length > 0 && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    });

    input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && !input.value && index > 0) {
            inputs[index - 1].focus();
        }
    });

    input.addEventListener("paste", (e) => {
        e.preventDefault();
        const pasteData = e.clipboardData.getData('text').trim();

        if (!/^\d{4}$/.test(pasteData)) return;

        inputs.forEach((inp, i) => {
            inp.value = pasteData[i] || "";
        });
    });

});

// Combine OTP before submit
resetform.addEventListener('submit', function(e){

    const otp = Array.from(inputs).map(input => input.value).join('');

    if (otp.length !== 4) {
        e.preventDefault();
        alert("Please enter the complete 4-digit code.");
        return;
    }

    const hidden = document.createElement('input');
    hidden.type = 'hidden';
    hidden.name = 'code';
    hidden.value = otp;
    this.appendChild(hidden);
});


// =======================
// COUNTDOWN TIMER
// =======================

const expiresAt = @json($expiresAt);

function startCountdown(expiryTimestamp) {
        clearInterval(countdownInterval);

        countdownInterval = setInterval(() => {
            const now = Math.floor(Date.now() / 1000);
            const remaining = expiryTimestamp - now;

            if (remaining <= 0 || !expiryTimestamp) {
                clearInterval(countdownInterval);

                countdownEl.textContent = "Code Expired";

                // Disable Verify button
                if (resetBtn) resetBtn.disabled = true;

                // Enable Resend button
                if (resendBtnn) resendBtnn.disabled = false;

                return;
            }

            const minutes = Math.floor(remaining / 60);
            const seconds = remaining % 60;
            countdownEl.textContent =
                `Code expires in ${minutes}:${seconds.toString().padStart(2, '0')}`;

        }, 1000);
    }

// Start countdown if expiration exists
if (expiresAt) {
        startCountdown(expiresAt);
    } else {
        if (resendBtnn) resendBtnn.disabled = false;
    }


// =======================
// RESEND LOGIC
// =======================

resendBtnn.addEventListener("click", function() {

    resendBtnn.disabled = true;
    resetBtn.disabled = false;

    fetch("{{ route('resend_reset_verification',$tenant->subdomain) }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            "Accept": "application/json"
        }
    })
    .then(response => response.json())
    .then(data => {

        alert(data.message);

        // Restart countdown from 5 minutes
        const newExpiry = Math.floor(Date.now() / 1000) + (5 * 60);
        startCountdown(newExpiry);

    })
    .catch(() => {

        alert("Error resending code.");
        resendBtnn.removeAttribute("disabled");

    });

});

});

</script>

@endsection