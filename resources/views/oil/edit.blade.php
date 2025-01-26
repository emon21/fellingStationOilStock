@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Edit oil</h3>
                        <a href="{{ route('oil.index') }}" class="card-tools btn btn-primary">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('oil.update', $oil) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group col-sm-3">
                                    <label for="tank_name">Tank Name</label>
                                    $ <input type="text" name="tank_name" id="tank_name" class="form-control"
                                        value="{{ old('tank_name', $oil->tank_name) }}">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="tank_name">Select Tank</label>
                                    <select name="tank_no" id="tank_no" class="form-control">

                                        <option value="">-- Select Tank --</option>
                                        @foreach ($categories as $category)
                                           <option value="{{ $category->id }}" {{ $oil->tank_no == $category->id ? 'selected' : ''  }}>{{ $category->tank_name }}</option> 

                                            {{-- <option value="{{ $category->id }}"
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                {{ $category->tank_name }}
                                            </option> --}}

                                            {{-- <option value="{{ $category->id }}"
                                                {{ isset($selectedCategory) && $oil->tank_no == $category->id ? 'selected' : '' }}>
                                                {{ $category->tank_name }}
                                            </option> --}}

                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-sm-3">
                                    <label for="matien_no">Matien No</label>
                                    <input type="text" name="matien_no" id="matien_no" class="form-control"
                                        value="{{ old('matien_no', $oil->matien_no) }}">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group col-sm-2">
                                    <label for="last_reading">Last Reading</label>
                                    <input type="number" name="last_reading" id="last_reading" class="form-control"
                                        value="{{ old('last_reading', $oil->last_reading) }}">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="fast_reading">Fast Reading</label>
                                    <input type="number" name="fast_reading" id="fast_reading" class="form-control"
                                        value="{{ old('fast_reading', $oil->fast_reading) }}">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="fast_dip">Fast DIP</label>
                                    <input type="number" name="fast_dip" id="fast_dip" class="form-control"
                                        value="{{ old('fast_dip', $oil->fast_dip) }}">
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="fast_qty">Fast QTY</label>
                                    <input type="number" name="fast_qty" id="fast_qty" class="form-control"
                                        value="{{ old('fast_qty', $oil->fast_qty) }}">
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="last_dip">Last DIP</label>
                                    <input type="number" name="last_dip" id="last_dip" class="form-control"
                                        value="{{ old('last_dip', $oil->last_dip) }}">
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="last_qty">Last QTY</label>
                                    $ <input type="number" name="last_qty" id="last_qty" class="form-control"
                                        value="{{ old('last_qty', $oil->last_qty) }}">
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
