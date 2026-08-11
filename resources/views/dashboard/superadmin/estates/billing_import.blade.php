@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Import Existing Billing
@endsection

@section('content')

<div class="page-body">

    <div class="container-fluid">

        <div class="page-title">

            <h2>Import Existing Billing</h2>

            <p>
                {{ $tenant->estate_name }}
            </p>

        </div>

    </div>


    <div class="container-fluid">

        @if(session('success'))

            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif


        @if(session('error'))

            <div class="alert alert-danger">
                {{ session('error') }}
            </div>

        @endif


        @if($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <div class="card">

            <div class="card-header">

                <h3>
                    Existing Resident Billing
                </h3>

            </div>


            <div class="card-body">

                <div class="alert alert-info">

                    <strong>Important:</strong>

                    Existing residents should reference an
                    existing Subscription Plan using its
                    <strong>plan_id</strong>.

                    Do not create a new plan for every resident.

                </div>


                <div class="mb-4">

                    <a href="{{ route(
                        'superadmin.tenant.billing.template',
                        $tenant->id
                    ) }}"
                    class="btn btn-outline-primary">

                        <i class="bi bi-download"></i>

                        Download CSV Template

                    </a>

                </div>


                <form method="POST"
                      action="{{ route(
                          'superadmin.tenant.billing.preview',
                          $tenant->id
                      ) }}"
                      enctype="multipart/form-data">

                    @csrf


                    <div class="mb-3">

                        <label class="form-label">
                            Upload CSV
                        </label>

                        <input
                            type="file"
                            name="billing_file"
                            class="form-control"
                            accept=".csv,.txt"
                            required>

                    </div>


                    <button type="submit"
                            class="btn btn-primary">

                        Validate & Preview

                    </button>

                </form>

            </div>

        </div>


    </div>

</div>

@endsection