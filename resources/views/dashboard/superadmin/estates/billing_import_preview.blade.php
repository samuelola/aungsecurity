@extends('dashboard.superadmin.superadmin_master')

@section('title')
    Billing Import Preview
@endsection

@section('content')

<div class="page-body">

    <div class="container-fluid">

        <h2>Billing Import Preview</h2>

        <div class="row mt-4">

            <div class="col-md-4">

                <div class="card">

                    <div class="card-body">

                        <h5>Total Valid</h5>

                        <h2 class="text-success">
                            {{ count($validRows) }}
                        </h2>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card">

                    <div class="card-body">

                        <h5>Total Invalid</h5>

                        <h2 class="text-danger">
                            {{ count($invalidRows) }}
                        </h2>

                    </div>

                </div>

            </div>

        </div>


        @if(count($invalidRows))

            <div class="card mt-4">

                <div class="card-header">

                    <h4 class="text-danger">
                        Invalid Records
                    </h4>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table">

                            <thead>

                                <tr>

                                    <th>Row</th>
                                    <th>Email</th>
                                    <th>Errors</th>

                                </tr>

                            </thead>

                            <tbody>

                            @foreach($invalidRows as $row)

                                <tr>

                                    <td>
                                        {{ $row['row'] }}
                                    </td>

                                    <td>
                                        {{ $row['email'] ?? 'N/A' }}
                                    </td>

                                    <td>

                                        @foreach($row['errors'] as $error)

                                            <div class="text-danger">
                                                {{ $error }}
                                            </div>

                                        @endforeach

                                    </td>

                                </tr>

                            @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        @endif


        @if(count($validRows))

            <div class="card mt-4">

                <div class="card-header">

                    <h4>
                        Valid Records
                    </h4>

                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-hover">

                            <thead>

                                <tr>

                                    <th>Email</th>
                                    <th>Plan</th>
                                    <th>Billing</th>
                                    <th>Start</th>
                                    <th>End</th>
                                    <th>Amount</th>

                                </tr>

                            </thead>

                            <tbody>

                            @foreach($validRows as $row)

                                <tr>

                                    <td>
                                        {{ $row['email'] }}
                                    </td>

                                    <td>
                                        {{ $row['plan_name'] }}
                                    </td>

                                    <td>
                                        {{ ucfirst($row['billing_cycle']) }}
                                    </td>

                                    <td>
                                        {{ $row['starts_at'] }}
                                    </td>

                                    <td>
                                        {{ $row['ends_at'] }}
                                    </td>

                                    <td>
                                        ₦{{ number_format($row['amount'], 2) }}
                                    </td>

                                </tr>

                            @endforeach

                            </tbody>

                        </table>

                    </div>


                    <form method="POST"
                          action="{{ route(
                              'superadmin.tenant.billing.import.confirm',
                              $tenant->id
                          ) }}">

                        @csrf

                        {{-- Temporary import data --}}

                        <input
                            type="hidden"
                            name="import_data"
                            value="{{ encrypt($validRows) }}">


                        <button type="submit"
                                class="btn btn-success">

                            Confirm Import

                        </button>

                    </form>

                </div>

            </div>

        @endif

    </div>

</div>

@endsection