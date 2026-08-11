@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Access Enablement Fee
@endsection

@section('content')

<div class="page-body">

    <div class="container-fluid">

        <div class="page-title">
            <div class="row">

                <div class="col-sm-6">

                    <h2>Access Enablement Fee</h2>

                    <p class="mb-0 text-title-gray">
                        {{ $tenant->estate_name }}
                    </p>

                </div>

            </div>
        </div>

    </div>


    <div class="container-fluid default-dashboard">

        <div class="row justify-content-center">

            <div class="col-xl-8">

                @if(session('success'))

                    <div class="alert alert-success alert-dismissible fade show">

                        {{ session('success') }}

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert">
                        </button>

                    </div>

                @endif


                <div class="card">

                    <div class="card-header card-no-border">

                        <h3>
                            AUNG Resident Access Enablement Fee
                        </h3>

                    </div>


                    <div class="card-body">

                        <form method="POST"
                              action="{{ route(
                                  'superadmin.tenant.access.fee.update',
                                  $tenant->id
                              ) }}">

                            @csrf


                            {{-- Enable Fee --}}

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Enable Access Enablement Fee
                                </label>

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="access_fee_enabled"
                                        value="1"
                                        id="access_fee_enabled"
                                        {{ $tenant->access_fee_enabled
                                            ? 'checked'
                                            : '' }}>

                                    <label class="form-check-label"
                                           for="access_fee_enabled">

                                        Charge residents an access enablement fee

                                    </label>

                                </div>

                            </div>


                            {{-- Amount --}}

                            <div class="mb-4">

                                <label class="form-label">
                                    Access Enablement Fee Amount
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        ₦
                                    </span>

                                    <input
                                        type="number"
                                        name="access_fee_amount"
                                        class="form-control"
                                        min="0"
                                        step="0.01"
                                        value="{{ old(
                                            'access_fee_amount',
                                            $tenant->access_fee_amount ?? 10000
                                        ) }}">

                                </div>

                                <small class="text-muted">
                                    Default amount: ₦10,000
                                </small>

                                @error('access_fee_amount')

                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            {{-- Timing --}}

                            <div class="mb-4">

                                <label class="form-label">
                                    Apply Fee
                                </label>

                                <select
                                    name="access_fee_timing"
                                    class="form-control">

                                    <option value="immediately"
                                        {{ old(
                                            'access_fee_timing',
                                            $tenant->access_fee_timing
                                        ) === 'immediately'
                                            ? 'selected'
                                            : '' }}>

                                        Immediately

                                    </option>

                                    <option value="after_trial"
                                        {{ old(
                                            'access_fee_timing',
                                            $tenant->access_fee_timing
                                        ) === 'after_trial'
                                            ? 'selected'
                                            : '' }}>

                                        After Free Trial

                                    </option>

                                </select>

                                @error('access_fee_timing')

                                    <div class="text-danger mt-1">
                                        {{ $message }}
                                    </div>

                                @enderror

                            </div>


                            <button type="submit"
                                    class="btn btn-primary w-100">

                                Save Access Fee Settings

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection