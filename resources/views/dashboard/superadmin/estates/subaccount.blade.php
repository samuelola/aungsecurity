@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Super Admin | Estates
@endsection


@section('content')
   <style>
 
    input {
    cursor: text !important;
    }

    label{
    cursor: text !important;
    }
  </style> 
   <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Superadmin Dashboard</h2>
                  <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
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
                   <!--start-->
                

                        <div class="row g-4 justify-content-center">

                           <div class="container-fluid table-space basic_table">
                            <div class="row">
                               
                                 <div class="col-sm-12">
                                    <div class="card overflow-hidden">
                                    <div class="card-header card-no-border">
                                        <h3>All Tenants</h3>
                                        
                                    </div>
                                        <div class="table-responsive signal-table">
                                            <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sn</th>
                                                <th scope="col">Estate Name</th>
                                                <th scope="col">Subdomain</th>
                                                <th scope="col">Estate Manager Name</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $sn = 1;
                                                @endphp
                                                @foreach($tenants as $tenant)
                                                <tr>
                                                    <th scope="row">{{$sn++}}</th>
                                                    <td scope="row">{{ucfirst($tenant->estate_name ?? 'N/A')}} </td>
                                                    <td scope="row">{{$tenant->subdomain ?? 'N/A'}} </td>
                                                    <td scope="row">{{ucfirst($tenant->first_name ?? 'N/A')}} {{ucfirst($tenant->last_name ?? 'N/A')}} </td>
                                                    <td>{{ $tenant->created_at->format('d M Y') }}</td>
                                                    <td>
                                                        <a href="#" 
                                                            class="btn btn-info btn-sm open-subaccount-modal"
                                                            data-id="{{ $tenant->id }}">
                                                            <i class="bi bi-people-fill"></i> Create Subaccount
                                                        </a>
                                                    </td>
                                                
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            </div>

                            <!--another row --> 
                               <div class="row">
                               
                                 <div class="col-sm-12">
                                    <div class="card overflow-hidden">
                                    <div class="card-header card-no-border">
                                        <h3>Subaccounts</h3>
                                        
                                    </div>
                                        <div class="table-responsive signal-table">
                                            <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sn</th>
                                                <th scope="col">Business Name</th>
                                                <th scope="col">Bank Details</th>
                                                <th scope="col">Estate Name</th>
                                                <th scope="col">Estate Manager Name</th>
                                                <th scope="col">Created</th>
                                                <!-- <th scope="col">Action</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $sn = 1;
                                                @endphp
                                                @foreach($subaccts as $subacct)
                                                <tr>
                                                    <th scope="row">{{$sn++}}</th>
                                                    <td scope="row">{{ucfirst($subacct->business_name ?? 'N/A')}} </td>
                                                    <td scope="row">{{$subacct->bank->name ?? 'N/A'}}<br> 
                                                        {{$subacct->account_number}}
                                                    </td>
                                                    <td scope="row">{{ucfirst($tenant->estate_name ?? 'N/A')}} </td>
                                                    <td scope="row">{{ucfirst($tenant->first_name ?? 'N/A')}} {{ucfirst($tenant->last_name ?? 'N/A')}} </td>
                                                    <td>{{ $tenant->created_at->format('d M Y') }}</td>
                                                    
                                                
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            </div>
                            <!-- end another row -->
                        </div>

                           

                        </div>


                   <!--end-->
          </div>
         
        </div>

 <!--modal -->     
 <!-- Create Subaccount Modal -->
<div class="modal fade" id="createSubaccountModal" tabindex="-1">
  <div class="modal-dialog">
    <form id="subaccountForm">
        @csrf
        <input type="hidden" name="tenant_id" id="tenant_id">

        <div class="modal-content">
            <div class="modal-header">
                <h5>Create Subaccount</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <label>Business Name</label>
                    <input type="text" name="business_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Bank</label>
                    <select name="bank_code" class="form-control" required>
                        <option value="">Select Bank</option>
                        @foreach($banks as $bank)
                            <option value="{{ $bank->code }}">{{ $bank->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Account Number</label>
                    <input type="text" name="account_number" class="form-control" maxlength="10" required>
                </div>

                <div class="mb-3">
                    <label>Account Name</label>
                    <input type="text" name="account_name" id="account_name" class="form-control" readonly>
                </div>

            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" disabled>
                    Create Subaccount
                </button>
            </div>
        </div>
    </form>
  </div>
</div>
 <!--endmodal-->
@endsection


@section('script')


<script>
$(document).ready(function () {

    let modal = new bootstrap.Modal($('#createSubaccountModal')[0]);
    let verifyTimeout = null;

    // Open modal
    $(document).on('click', '.open-subaccount-modal', function () {
        $('#tenant_id').val($(this).data('id'));
        modal.show();
    });

    function toggleSubmit() {
        let name = $('#account_name').val();

        if (name && name !== 'Invalid account details' && name !== 'Verifying...') {
            $('button[type="submit"]').prop('disabled', false);
        } else {
            $('button[type="submit"]').prop('disabled', true);
        }
    }

    function verifyAccount() {
        let accountNumber = $('input[name="account_number"]').val();
        let bankCode = $('select[name="bank_code"]').val();

        if (accountNumber.length === 10 && bankCode) {

            $('#account_name').val('Verifying...').css('color', 'orange');
            toggleSubmit();

            $.post("{{ route('verify.account') }}", {
                _token: "{{ csrf_token() }}",
                account_number: accountNumber,
                bank_code: bankCode
            })
            .done(function (res) {
                $('#account_name').val(res.account_name).css('color', 'green');
                toggleSubmit();
            })
            .fail(function (xhr) {
                $('#account_name').val('Invalid account details').css('color', 'red');
                toggleSubmit();
            });
        }
    }

    // Auto verify on typing (debounced)
    $('input[name="account_number"]').on('keyup', function () {
        clearTimeout(verifyTimeout);
        verifyTimeout = setTimeout(verifyAccount, 800);
    });

    // Auto verify on bank change
    $('select[name="bank_code"]').on('change', verifyAccount);

    // Submit form
    $('#subaccountForm').submit(function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('subaccount.store') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (res) {
                alert(res.message);
                modal.hide();
                $('#subaccountForm')[0].reset();
                $('button[type="submit"]').prop('disabled', true);
                window.location.href = "{{ route('create_subaccount') }}";
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    let errors = Object.values(xhr.responseJSON.errors).flat().join('\n');
                    alert(errors);
                } else {
                    alert(xhr.responseJSON?.message || 'Something went wrong');
                }
            }
        });
    });

});
</script>

@endsection