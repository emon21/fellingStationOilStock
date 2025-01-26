@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Create Driver</h3>
                        <a href="#" class="card-tools btn btn-primary">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('driver.create') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-end align-items-center">
                                <div class="form-group col-sm-3">
                                    <label for="pay_of_date">Pay OF Date</label>
                                    <input type="date" name="pay_of_date" id="pay_of_date" class="form-control">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group col-sm-6">
                                    <label for="driver_name">Driver Name</label>
                                    <input type="text" name="driver_name" id="driver_name" class="form-control">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="driver_mob_no">Driver MOB NO</label>
                                    <input type="number" name="driver_mob_no" id="driver_mob_no" class="form-control">
                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group col-sm-6">
                                    <label for="driver_dip_require captialize">Driver DIP Require</label>
                                    <input type="number" name="driver_dip_require" id="driver_dip_require"
                                        class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="driver_present_dip">Driver Present DIP</label>
                                    <input type="number" name="driver_present_dip" id="driver_present_dip"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group col-sm-3">
                                    <label for="veichale_no">Veichale No</label>
                                    <input type="number" name="veichale_no" id="veichale_no" class="form-control">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="inv_no">Inv No</label>
                                    <input type="number" name="inv_no" id="inv_no" class="form-control">
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="pay_of_name">Pay oF Name</label>
                                    <input type="text" name="pay_of_name" id="pay_of_name" class="form-control">
                                </div>
                                
                                <div class="form-group col-sm-3">
                                    <label for="pay_of_tk" class="capitalize">Pay of Tk</label>
                                    <input type="number" name="pay_of_tk" id="pay_of_tk" class="form-control">
                                </div>
                            </div>

                            <div class="form-group ml-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
