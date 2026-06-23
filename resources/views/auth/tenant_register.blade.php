@extends('auth.auth_master')

@section('content')

<style>

input {
  cursor: text !important;
}

#serviceAgreement{
  cursor: pointer !important;
}


</style>

   <div class="container-fluid">
      <div class="row">
        <div class="col-xl-7 login_one_image"><img class="bg-img-cover bg-center" src="../assets/images/login/2.jpg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
          <div class="login-card login-dark login-bg">
            <div>
              <div>
                <a class="logo" href="{{route('home')}}">
                  <img class="img-fluid for-light m-auto" style="width:100px;height:100px;" src="{{asset('aung_logo_white.png')}}" alt="looginpage">
                  <img class="for-dark" src="{{asset('aung_logo_blue.png')}}" style="width:120px;height:100px;" alt="logo">
                </a>
               </div>
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
                  <div class="form-group">
                    <label class="col-form-label">Estate Name</label>
                    <input class="form-control" name="estate_name" type="text" value="{{ old('estate_name') }}"  placeholder="Enter Estate name">
                     @error('estate_name')
                        <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                     @enderror 
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Subdomain Name</label>
                    <input class="form-control" name="subdomain" type="text" value="{{ old('subdomain') }}"  placeholder="Enter estate name, e.g goodwill">
                    <p class="mb-0 text-title-gray" style="color:#2f2c2b;">Note : No spaces between for the subdomain name and must be in small letters</p>
                     @error('subdomain')
                      <span class="invalid-feedback d-block" role="alert"><strong>{{ $message }}</strong></span>
                     @enderror 
                  </div>
                  <div class="form-group mb-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="serviceAgreement" name="service_agreement" value="1">
                      <label class="form-check-label" for="serviceAgreement">
                        I agree to the &nbsp;
                        {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#serviceAgreementModal" style="color:#1d194b !important; font-weight: 700;">
                          Service Agreement
                        </a> --}}
                        <a href="#"  style="color:#1d194b !important; font-weight: 700;"
                          class="view-pdff"
                          data-pdf="{{ route('new_service_agreement', 'service_agreement.pdf') }}">
                          Service Agreement
                        </a>
                      </label>
                    </div>

                    @error('service_agreement')
                      <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                  <div class="form-group mb-0 checkbox-checked">
                   
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" type="submit">Signup</button>
                    </div>
                  </div>
                  
                 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


            
            {{-- <div class="modal fade" id="serviceAgreementModal" tabindex="-1" aria-labelledby="serviceAgreementModalLabel" aria-hidden="true">  
              <div class="modal-dialog modal-fullscreen">
                  <div class="modal-content">

                      <div class="modal-header">
                          <h5 class="modal-title">User Agreement</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>

                      <div class="modal-body p-0">
                          <iframe
                              src="{{ asset('/files_service/service_agreement.pdf') }}"
                              width="100%"
                              height="600"
                              style="border:none;">
                          </iframe>
                      </div>

                  </div>
              </div>
          </div>       --}}


     {{-- <div class="modal fade" id="serviceAgreementModal" tabindex="-1" aria-labelledby="serviceAgreementModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="serviceAgreementModalLabel">Service Agreement</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>  
                
                <div class="modal-body p-0">
                    <iframe
                        src="{{ asset('/files_service/service_agreement.pdf') }}"
                        width="100%"
                        height="600"
                        style="border:none;">
                    </iframe>
                </div>

            </div> 
          
        </div>  
        
     </div>    --}}

                 <div class="modal fade" id="pdfModal" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">PDF Viewer</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body p-0">
                                <iframe id="pdfFrame"
                                        width="100%"
                                        height="600px"
                                        frameborder="0">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>


@endsection

@section('script')
<script>
document.querySelectorAll('.view-pdff').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();

        document.getElementById('pdfFrame').src =
            this.dataset.pdf;

        const modal = new bootstrap.Modal(
            document.getElementById('pdfModal')
        );

        modal.show();
    });
});
</script>
@endsection