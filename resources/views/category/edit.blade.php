@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Edit Category</h3>
                        <a href="#" class="card-tools btn btn-primary">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('category.update', $category) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="tank_name">Tank Name</label>
                                <input type="text" name="tank_name" id="tank_name" class="form-control" value="{{ old('tank_name', $category->tank_name) }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
