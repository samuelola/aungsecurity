@extends('dashboard.user.tenant_master')

@section('title')
    Fund Wallet
@endsection


@section('content')

   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Fund Wallet</h2>
                  
                </div>
                <div class="col-sm-6 col-12">
                  <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default</li>
                  </ol> -->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
               
              <div class="col-xxl-6 col-xl-2"></div>
             
               <div class="col-xxl-6 col-xl-8">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Fund Your Wallet</h3>
                  </div>
                  <div class="card-body transaction-history pt-0 mt-3">
                      <h2>Face Verification</h2>

<video id="video" autoplay playsinline></video>
<button id="capture">Capture Face</button>

<canvas id="canvas" style="display:none;"></canvas>

<form method="POST" action="#">
    @csrf
    <input type="hidden" name="image" id="image">
    <button type="submit">Verify</button>
</form>

<script>
const video = document.getElementById('video');

navigator.mediaDevices.getUserMedia({ video: true })
  .then(stream => video.srcObject = stream);

document.getElementById('capture').onclick = () => {
    const canvas = document.getElementById('canvas');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    canvas.getContext('2d').drawImage(video, 0, 0);
    document.getElementById('image').value =
        canvas.toDataURL('image/jpeg');
};
</script>

                  </div>
                </div>
              </div>
             
              <div class="col-xxl-6 col-xl-2"></div>

            </div>
          </div>
        </div>
@endsection

