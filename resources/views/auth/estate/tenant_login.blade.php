@extends('auth.auth_master')

@section('content')

<style>

.toggle-password {
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  cursor: pointer;
  font-size: 16px;
  color: #666;
}
input {
  cursor: text !important;
}
</style>

   <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7 login_one_image"><img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card login-dark login-bg">
            <div>
              <div><a class="logo" href="#"><img class="img-fluid for-light m-auto" src="../assets/images/logo/logo1.png" alt="looginpage"><img class="for-dark" src="../assets/images/logo/logo-dark.png" alt="logo"></a></div>
              <div class="login-main"> 
                <form class="theme-form" action="{{route('tenant_user_submit',$tenant->subdomain)}}" method="post">
                  @csrf
                  <h4 class="text-center">{{ucfirst($tenant->subdomain)}} Estate</h4>
                  <h2 class="text-center">Login into  your account</h2>
                  <p class="text-center">Enter your email &amp; password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" name="email" type="email"  placeholder="Test@gmail.com">
                    @error('email')
                    <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control password-field" type="password" name="password" placeholder="*********">
                      <span class="toggle-password" onclick="togglePassword(this)">
                        show
                      </span>
                    </div>
                    @error('password')
                      <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                  <div class="form-group mb-0 checkbox-checked">
                    <div class="form-check checkbox-solid-info d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                          <input class="form-check-input" id="solid6" type="checkbox">
                          <label style="position: relative;
    top: 5px;" class="form-check-label ms-2" for="solid6">Remember password</label>
                      </div>
                      <a class="link" href="forget-password.html">Forgot password?</a>
                  </div>
                  


                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Login               </button>
                    </div>
                  </div>
                 
                  
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{route('tenant_user_reg',$tenant->subdomain)}}">Create Account</a></p>
                </form>
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


@endsection