@extends('auth.auth_master')

@section('content')

<style>

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
              <div><a class="logo" href="{{route('tenant_create')}}">
              <img class="img-fluid for-light m-auto" style="width:100px;height:100px;" src="{{asset('aung_logo_white.png')}}" alt="looginpage">
              <img class="for-dark" src="{{asset('aung_logo_blue.png')}}" style="width:120px;height:100px;" alt="logo"></a></div>
              <div class="login-main"> 
                <form class="theme-form" action="{{route('tenant_store')}}" method="post">
                    @csrf
                  <h2 class="text-center">Signup</h2>
                  <p class="text-center">Enter your credentials to Signup</p>
                  <div class="form-group">
                    <label class="col-form-label">First Name</label>
                    <input class="form-control" name="first_name" type="text" value="{{ old('first_name') }}"  placeholder="John">
                     @error('first_name')
                     <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror 
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Lastname</label>
                    <input class="form-control" name="last_name" type="text" value="{{ old('last_name') }}" placeholder="Doe">
                     @error('last_name')
                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror 
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" name="email" type="email" value="{{ old('email') }}"  placeholder="Test@gmail.com">
                     @error('email')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                     @enderror 
                  </div> -->
                  <div class="form-group">
                    <label class="col-form-label">Subdomain Name</label>
                    <input class="form-control" name="subdomain" type="text" value="{{ old('subdomain') }}"  placeholder="Enter estate name, e.g goodwill">
                    <p class="mb-0 text-title-gray">No spaces between for the subdomain name</p>
                     @error('subdomain')
                      <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                     @enderror 
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="login[password]"  placeholder="*********">
                      <div class="show-hide"><span class="show">                   </span></div>
                    </div>
                     @error('password')
                    <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror 
                  </div>
                  <div class="form-group mb-0 checkbox-checked">
                   
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Signup                 </button>
                    </div>
                  </div>
                  
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection