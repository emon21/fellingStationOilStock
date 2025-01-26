@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h2>All Tank List</h2>
                    <a href="{{ route('category.create') }}" class="btn btn-success ">Create Tank</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>#Sl No</th>
                            <th>Tank Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->tank_name }}</td>
                                <td class="d-flex gap-4">
                                 <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                                 <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                 </form>

                                 {{-- <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger">Delete</a> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No Record Found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
