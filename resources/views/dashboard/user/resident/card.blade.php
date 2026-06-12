@extends('dashboard.user.tenant_master')

@section('title')
    Resident ID Card
@endsection


@section('content')

<style>
 .resident-card{
    width:380px;
    background:#fff;
    border-radius:20px;
    overflow:hidden;
}

.card-header-section{
    background:linear-gradient(
        135deg,
        #1e3a8a,
        #2563eb
    );
    color:#fff;
    text-align:center;
    padding:20px;
}

.card-body-section{
    padding:25px;
    text-align:center;
}

.photo-section{
    margin-bottom:20px;
}

.photo-section img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    border:4px solid #e5e7eb;
}

.details-section{
    text-align:left;
    margin-top:15px;
}

.details-section p{
    margin-bottom:15px;
    font-size:15px;
}

.qr-section{
    margin-top:20px;
    text-align:center;
}

.card-footer-section{
    background:#16a34a;
    color:#fff;
    text-align:center;
    padding:12px;
    font-weight:bold;
    letter-spacing:1px;
}

@media print {

    * {
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
    }

    .card-header-section {
        background: #1e3a8a !important;
        color: #fff !important;
    }

    .card-footer-section {
        background: #16a34a !important;
        color: #fff !important;
    }

    .resident-card {
        border: 1px solid #ddd;
    }
}

@media print {

    .no-print {
        display: none !important;
    }

    /* optional: remove shadows/background noise */
    body {
        background: #fff !important;
    }
}

</style>

   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Resident ID Card</h2>
                  
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
                 <div class="row"><!--end of row -->
                <div class="col-sm-12">
                  <div class="card overflow-hidden">
                    <div class="card-header card-no-border">
                      <h3>Resident ID Card</h3>
                      <!-- <p class="desc mb-0 mt-1"><span>use a class</span><code>table-*.border-bottom-*</code><span>class for Border bottom color</span></p> -->
                    </div>
                      <!--enter details-->
                           <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">

                                               <div class="d-flex justify-content-center">

                                                    <div class="resident-card shadow">

                                                        <div class="card-header-section">
                                                            <h4>{{ strtoupper($tenant->subdomain) }} ESTATE</h4>
                                                            <span>RESIDENT ID CARD</span>
                                                        </div>

                                                        <div class="card-body-section">

                                                            <div class="photo-section">

                                                                @if($kyc->face_image)
                                                                    <img
                                                                        src="{{ asset('storage/'.$kyc->face_image) }}"
                                                                        alt="Resident Photo">
                                                                @endif

                                                            </div>

                                                            <div class="details-section">

                                                               <p>
                                                                    <strong>Resident Name:</strong><br>
                                                                    {{ ucfirst($user?->first_name) }} {{ ucfirst($user?->last_name) }}
                                                                </p>

                                                                <p>
                                                                    <strong>Resident ID:</strong><br>
                                                                    {{ $kyc?->resident_id }}
                                                                </p>

                                                                <p>
                                                                    <strong>Flat Number:</strong>
                                                                    {{ $kyc?->flat_number }}
                                                                </p>
                                                                <p>
                                                                    <strong>Phone Number:</strong>
                                                                    {{ $kyc?->phone }}
                                                                </p>
                                                                <p>
                                                                    <strong>Emergency Pin:</strong>
                                                                    {{ $kyc?->emergency_pin }}
                                                                </p>
                                                                <p>
                                                                    <strong>Address:</strong>
                                                                    {{ $kyc?->address }}
                                                                </p>

                                                            </div>

                                                            

                                                        </div>

                                                        <div class="card-footer-section">
                                                            VERIFIED RESIDENT
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="no-print text-center mt-4">

                                                    

                                                    <button
                                                        onclick="printCard()"
                                                        class="btn btn-primary">
                                                         Print / Save Card as PDF
                                                    </button>

                                                </div>

                                            </div>
                                        </div>
                                        

                                    </div>
                                     
                                    
                                </div>

                            </div>
                      <!--end details-->
                  </div>
                </div>
                
              </div><!--end of row -->

          </div>
        </div>
@endsection


@section('script')
  <script>
function printCard() {
    window.print();
}
</script>
@endsection