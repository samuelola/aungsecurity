@extends('dashboard.superadmin.superadmin_master')

@section('title')
Trial Settings
@endsection

@section('content')

<div class="page-body">


<div class="container-fluid">

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Trial Settings  for {{ $tenant->estate_name }} estate</h2>
                
            </div>
        </div>
    </div>

</div>

<div class="container-fluid default-dashboard">

    <div class="row justify-content-center">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="col-xl-8">

            <div class="card">

                <div class="card-header card-no-border">
                    <h3>Subscription Trial</h3>
                </div>

                <div class="card-body">

                    <form method="POST"
                          action="{{ route('superadmin.tenant.trial.update', $tenant->id) }}">

                        @csrf

                        {{-- Enable Trial --}}
                        <div class="mb-4">

                            <label class="form-label fw-bold">
                                Enable Free Trial
                            </label>

                            <div class="form-check form-switch">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="trial_enabled"
                                    value="1"
                                    id="trial_enabled"
                                    {{ old('trial_enabled', $tenant->free_trial_enabled) ? 'checked' : '' }}>

                                <label class="form-check-label"
                                       for="trial_enabled">
                                    Enable free trial
                                </label>

                            </div>

                        </div>


                        {{-- Trial Duration --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Trial Duration
                            </label>

                            <select
                                name="trial_duration"
                                id="trial_duration"
                                class="form-control @error('trial_duration') is-invalid @enderror">

                                <option value="7"
                                    {{ old('trial_duration', $tenant->trial_duration) == 7 ? 'selected' : '' }}>
                                    7 Days
                                </option>

                                <option value="14"
                                    {{ old('trial_duration', $tenant->trial_duration) == 14 ? 'selected' : '' }}>
                                    14 Days
                                </option>

                                <option value="30"
                                    {{ old('trial_duration', $tenant->trial_duration) == 30 ? 'selected' : '' }}>
                                    30 Days
                                </option>

                                <option value="60"
                                    {{ old('trial_duration', $tenant->trial_duration) == 60 ? 'selected' : '' }}>
                                    60 Days
                                </option>

                                <option value="custom"
                                    {{ old('trial_duration', $tenant->trial_duration) == 'custom' ? 'selected' : '' }}>
                                    Custom
                                </option>

                            </select>

                            @error('trial_duration')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- Custom Duration --}}
                        <div
                            class="mb-3"
                            id="custom_duration_wrapper"
                            style="{{ old('trial_duration', $tenant->trial_duration) == 'custom' ? '' : 'display:none;' }}">

                            <label class="form-label">
                                Custom Duration (Days)
                            </label>

                            <input
                                type="number"
                                name="custom_trial_days"
                                id="custom_trial_days"
                                class="form-control @error('custom_trial_days') is-invalid @enderror"
                                min="1"
                                value="{{ old('custom_trial_days', $tenant->custom_trial_days) }}">

                            @error('custom_trial_days')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- Trial Start Date --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Trial Start Date
                            </label>

                            <input
                                type="date"
                                name="trial_start_date"
                                id="trial_start_date"
                                class="form-control @error('trial_start_date') is-invalid @enderror"
                                value="{{ old(
                                    'trial_start_date',
                                    $tenant->trial_start_date
                                        ? \Carbon\Carbon::parse($tenant->trial_start_date)->format('Y-m-d')
                                        : now()->format('Y-m-d')
                                ) }}">

                            @error('trial_start_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- Trial End Date --}}
                        <div class="mb-3">

                            <label class="form-label">
                                Trial End Date
                            </label>

                            <input
                                type="date"
                                id="trial_end_date"
                                class="form-control"
                                value="{{ $tenant->trial_end_date
                                    ? \Carbon\Carbon::parse($tenant->trial_end_date)->format('Y-m-d')
                                    : '' }}"
                                readonly>

                            <small class="text-muted">
                                This date is automatically calculated from
                                the trial start date and duration.
                            </small>

                        </div>


                        <button
                            type="submit"
                            class="btn btn-primary w-100">

                            Save Trial Settings

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>


</div>

@endsection

@section('script')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const durationSelect =
        document.getElementById('trial_duration');

    const customWrapper =
        document.getElementById('custom_duration_wrapper');

    const customDaysInput =
        document.getElementById('custom_trial_days');

    const startDateInput =
        document.getElementById('trial_start_date');

    const endDateInput =
        document.getElementById('trial_end_date');


    /*
    |--------------------------------------------------------------------------
    | Show / Hide Custom Duration
    |--------------------------------------------------------------------------
    */

    function toggleCustomDuration() {

        if (durationSelect.value === 'custom') {

            customWrapper.style.display = 'block';

        } else {

            customWrapper.style.display = 'none';

        }

    }


    /*
    |--------------------------------------------------------------------------
    | Calculate Trial End Date
    |--------------------------------------------------------------------------
    */

    function calculateEndDate() {

        const startDate = startDateInput.value;

        let duration = 0;


        if (durationSelect.value === 'custom') {

            duration = parseInt(customDaysInput.value) || 0;

        } else {

            duration = parseInt(durationSelect.value) || 0;

        }


        if (!startDate || duration <= 0) {

            endDateInput.value = '';

            return;

        }


        /*
        |----------------------------------------------------------------------
        | Create date from start date
        |----------------------------------------------------------------------
        */

        const date = new Date(startDate + 'T00:00:00');


        /*
        |----------------------------------------------------------------------
        | Add trial duration
        |----------------------------------------------------------------------
        */

        date.setDate(date.getDate() + duration);


        /*
        |----------------------------------------------------------------------
        | Format YYYY-MM-DD
        |----------------------------------------------------------------------
        */

        const year =
            date.getFullYear();

        const month =
            String(date.getMonth() + 1).padStart(2, '0');

        const day =
            String(date.getDate()).padStart(2, '0');


        endDateInput.value =
            `${year}-${month}-${day}`;
    }


    /*
    |--------------------------------------------------------------------------
    | Events
    |--------------------------------------------------------------------------
    */

    durationSelect.addEventListener('change', function () {

        toggleCustomDuration();

        calculateEndDate();

    });


    startDateInput.addEventListener('change', function () {

        calculateEndDate();

    });


    customDaysInput.addEventListener('input', function () {

        calculateEndDate();

    });


    /*
    |--------------------------------------------------------------------------
    | Initial Load
    |--------------------------------------------------------------------------
    */

    toggleCustomDuration();

    calculateEndDate();

});

</script>

@endsection
