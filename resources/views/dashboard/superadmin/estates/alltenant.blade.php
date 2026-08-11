@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Super Admin | Estates
@endsection


@section('content')

<style>
    /* Allow the table to scroll horizontally on smaller screens */
    .tenant-table-wrapper {
        width: 100%;
        overflow-x: auto !important;
        overflow-y: visible !important;
        -webkit-overflow-scrolling: touch;
    }

    .tenant-table-wrapper table {
        min-width: 1100px;
        margin-bottom: 0;
    }

    /* Keep action buttons together */
    .action-column {
        white-space: nowrap;
        min-width: 140px;
    }

    /* Make long table content easier to read */
    .tenant-table-wrapper th,
    .tenant-table-wrapper td {
        vertical-align: middle;
    }

    /* Prevent badges from becoming too cramped */
    .tenant-table-wrapper .badge {
        white-space: nowrap;
    }

    /* Keep dropdown above the table */
    .action-column .dropdown {
        position: static;
    }

    .action-column .dropdown-menu {
        z-index: 99999;
    }

    .action-column .dropdown-toggle::after {
    display: none !important;
}

    /* Mobile */
    @media (max-width: 767.98px) {
        .tenant-table-wrapper {
            overflow-x: auto !important;
        }

        .tenant-table-wrapper table {
            min-width: 1100px;
        }

        .tenant-table-wrapper th,
        .tenant-table-wrapper td {
            white-space: nowrap;
        }
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

                   @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}

                            <button type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"></button>
                        </div>
                   @endif
                       
                        

                        <div class="row g-4 justify-content-center">

                           <div class="container-fluid table-space basic_table">
                            <div class="row">
                               
                                 <div class="col-sm-12">
                                    <div class="card">
                                    <div class="card-header card-no-border">
                                        <h3>All Tenants</h3>
                                        
                                    </div>
                                        <div class="table-responsive tenant-table-wrapper">
                                            <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <th scope="col">Sn</th>
                                                <th scope="col">Estate Name</th>
                                                <th scope="col">Subdomain</th>
                                                <th scope="col">Estate Manager Name</th>
                                                <th scope="col">Created</th>
                                                <th scope="col">KYC Requirement</th>
                                                <th scope="col">Free Trial</th>
                                                <th scope="col">Access Fee</th>
                                                <th scope="col">Billing Import</th>
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
                                                        @if($tenant->kyc_required)
                                                            <span class="badge bg-success">
                                                                KYC Enabled
                                                            </span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">
                                                                KYC Disabled
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tenant->free_trial_enabled)
                                                            <span class="badge bg-success">
                                                                Free Trial Enabled
                                                            </span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">
                                                                Free Trial Disabled
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tenant->access_fee_enabled)
                                                            <span class="badge bg-success">
                                                                Access Fee Enabled
                                                            </span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">
                                                                Access Fee Disabled
                                                            </span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($tenant->import_existing_subscription_billing)
                                                            <span class="badge bg-success">
                                                                Billing Import Enabled
                                                            </span>
                                                        @else
                                                            <span class="badge bg-warning text-dark">
                                                                Billing Import Disabled
                                                            </span>
                                                        @endif
                                                    </td>

                                                    <td class="action-column">

                                                        <div class="dropdown">

                                                            <button
                                                                class="btn btn-default btn-sm dropdown-toggle"
                                                                type="button"
                                                                data-bs-toggle="dropdown"
                                                                data-bs-boundary="viewport"
                                                                aria-expanded="false">

                                                                <i class="bi bi-gear me-1"></i>
                                                                Actions
                                                                <i class="bi bi-chevron-down ms-1"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                {{-- View Residents --}}
                                                                <li>
                                                                    <a class="dropdown-item"
                                                                    href="{{ route('superadmin.estate.users', $tenant->id) }}">

                                                                        <i class="bi bi-people-fill me-2"></i>
                                                                        View Residents

                                                                    </a>
                                                                </li>


                                                                {{-- KYC --}}
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>

                                                                <li>

                                                                    <form method="POST"
                                                                        action="{{ route('superadmin.tenant.toggle.kyc', $tenant->id) }}"
                                                                        class="kyc-toggle-form"
                                                                        data-estate="{{ $tenant->estate_name }}"
                                                                        data-current-status="{{ $tenant->kyc_required ? 'enabled' : 'disabled' }}">

                                                                        @csrf

                                                                        <button type="submit"
                                                                                class="dropdown-item">

                                                                            @if($tenant->kyc_required)

                                                                                <i class="bi bi-shield-x text-danger me-2"></i>
                                                                                Disable KYC

                                                                            @else

                                                                                <i class="bi bi-shield-check text-success me-2"></i>
                                                                                Enable KYC

                                                                            @endif

                                                                        </button>

                                                                    </form>

                                                                </li>


                                                                {{-- Trial --}}
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>

                                                                <li>

                                                                    <a class="dropdown-item"
                                                                    href="{{ route('superadmin.tenant.trial.settings', $tenant->id) }}">

                                                                        <i class="bi bi-clock-history me-2"></i>
                                                                        Trial Settings

                                                                    </a>

                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>

                                                                <li>
                                                                    <a class="dropdown-item"
                                                                    href="{{ route('superadmin.tenant.access.fee.settings', $tenant->id) }}">

                                                                        <i class="bi bi-cash-coin me-2"></i>
                                                                        Access Fee Settings
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>

                                                                <li>
                                                                <form method="POST"
                                                                    action="{{ route('superadmin.tenant.toggle.billing.import', $tenant->id) }}">
                                                                    @csrf

                                                                    <button type="submit" class="dropdown-item">

                                                                        @if($tenant->import_existing_subscription_billing)

                                                                            <i class="bi bi-toggle-on text-success me-2"></i>
                                                                            Disable Billing Import

                                                                        @else

                                                                            <i class="bi bi-toggle-off text-muted me-2"></i>
                                                                            Enable Billing Import

                                                                        @endif

                                                                    </button>

                                                                </form>
                                                            </li>
                                                            @if($tenant->import_existing_subscription_billing)

                                                                <li>
                                                                    <a class="dropdown-item"
                                                                    href="{{ route('superadmin.tenant.billing.import', $tenant->id) }}">

                                                                        <i class="bi bi-file-earmark-spreadsheet text-primary me-2"></i>

                                                                        Import Existing Billing

                                                                    </a>
                                                                </li>

                                                            @endif
                                                                

                                                            </ul>

                                                        </div>

                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            
                            
                            </div>
                        </div>

                           

                        </div>


                   <!--end-->
          </div>
         
        </div>
@endsection


@section('script')

<script>
$(document).ready(function () {

    $('.kyc-toggle-form').on('submit', function (e) {

        e.preventDefault();

        const form = this;
        const estate = $(this).data('estate');
        const currentStatus = $(this).data('current-status');

        let message;

        if (currentStatus === 'enabled') {
            message = 'Are you sure you want to DISABLE KYC for ' + estate + ' Estate ?';
        } else {
            message = 'Are you sure you want to ENABLE KYC for ' + estate + '  Estate ?';
        }

        if (confirm(message)) {
            form.submit();
        }
    });

});
</script>

@endsection