@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-around align-items-center my-3">
                    <h2>Calibaration List</h2>
                    @foreach ($categories as $category)
                        <a class="btn btn-success" href="{{ route('category.calibaration', $category) }}" target="_blank">{{ $category->tank_name }} : -> {{ ( $category->calibaration->count() ) }}</a>
                    @endforeach
                  
                    <a href="{{ route('calibaration.create') }}" class="btn btn-success ">Create Calibaration</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>#Sl No</th>
                            <th>Tank Name</th>
                            <th>DIP in MM</th>
                            <th>Qty in LTR</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($calibarations as $calibaration)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $calibaration->category->tank_name }}</td>
                                <td>{{ $calibaration->dip_in_mm }}</td>
                                <td>{{ $calibaration->qty_in_ltr }}</td>
                                <td class="d-flex gap-4 justify-content-left align-items-center">
                                    <a href="{{ route('calibaration.edit', $calibaration) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('calibaration.destroy', $calibaration) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-danger text-2xl py-4 text-bold">No Record Found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $calibarations->links() }}
            </div>
        </div>
    </div>
@endsection
