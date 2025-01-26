@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Edit calibaration</h3>
                        <a href="#" class="card-tools btn btn-primary">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('calibaration.update', $calibaration) }}" method="POST">
                            @csrf
                           @method('PUT')
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="form-group col-sm-3">
                                    <label for="dip_in_mm">choose Tank :</label>
                                    <select name="tank_id" id="" class="form-control">
                                        <option value=""> -- select Tank -- </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $calibaration->cat_id == $category->id ? 'selected' : '' }} class="form-control">
                                                {{ $category->tank_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- <option value="{{ $category->id }}" {{ $oil->tank_no == $category->id ? 'selected' : ''  }}>{{ $category->tank_name }}</option>  --}}

                                <div class="form-group col-sm-4">
                                    <label for="dip_in_mm">DIP in MM</label>
                                    <input type="text" name="dip_in_mm" id="dip_in_mm" class="form-control"
                                        placeholder="Your DIP in MM" value="{{ $calibaration->dip_in_mm }}">
                                </div>

                                <div class="form-group col-sm-5">
                                    <label for="qty_in_ltr">QTY in LTR</label>
                                    <input type="text" name="qty_in_ltr" id="qty_in_ltr" class="form-control"
                                        placeholder="Your QTY in LTR" value="{{ $calibaration->qty_in_ltr }}">
                                </div>
                            </div>


                            <div class="form-group ml-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
