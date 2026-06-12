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
                <form class="theme-form" action="{{route('tenant_reset_password',$tenant->subdomain)}}" method="post">
                  @csrf
                  <h4 class="text-center">{{ucfirst($tenant->estate_name)}} Estate</h4>
                  <h2 class="text-center">Reset Password</h2>
                  <!-- <p class="text-center">Enter your password &amp; To Reset Password</p> -->
                   <div class="form-group">
                        <label class="col-form-label">New Password</label>
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

                    <div class="form-group">
                        <label class="col-form-label">Confirm New Password</label>
                        <div class="form-input position-relative">
                        <input class="form-control password-field" type="password" name="password_confirmation" placeholder="*********">
                        <span class="toggle-password" onclick="togglePassword(this)">
                            show
                        </span>
                        </div>
                        @error('password_confirmation')
                        <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                  
                 
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Reset Password</button>
                    </div>
                  </div>
                 
                  
                  <p class="mt-4 mb-0 text-center"><span style="color:#292929">Remember your password?<span><a style="font-weight:600;" class="ms-2" href="{{route('tenant_user_login',$tenant->subdomain)}}">Login</a></p>
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