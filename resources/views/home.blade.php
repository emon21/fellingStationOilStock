@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">

                <div class="d-flex justify-content-between align-items-center my-3">
                    <h2> Dip Calculation : </h2>
                <a href="{{ route('calibaration.index') }}" class="btn btn-primary">Go Back</a>
                </div>
                @foreach ($categories as $tank)
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title text-light bg-primary px-2 py-3 ">
                                {{ $tank->tank_name }}
                            </h5>
                            <table class="table table-striped table-bordered">
                                <thead class="bg-primary text-light">
                                    <tr>
                                        <th>#Sl No</th>
                                        <th>Dip</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tank->calibaration as $calibaration)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $calibaration->dip_in_mm }}</td>
                                            <td>{{ $calibaration->qty_in_ltr }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
