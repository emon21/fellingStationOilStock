@extends('layouts.app')
@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center my-3">
                    <h2>Oil List</h2>
                    <a href="{{ route('oil.create') }}" class="btn btn-success ">Create Oil</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead class="bg-primary text-light">
                        <tr>
                            <th>#Sl No</th>
                            <th>Tank Name</th>
                            <th>Tank NO</th>
                            <th>matien_no</th>
                            <th>last_reading</th>
                            <th>fast_reading</th>

                            <th>fast_dip</th>
                            
                            <th>last_dip</th>
                            <th>parcess qty</th>
                            
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($oilStock AS $oilstock)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $oilstock->tank_name }}</td>
                                <td>{{ $oilstock->tank_no }}</td>
                                <td>{{ $oilstock->matien_no }}</td>
                                <td>{{ $oilstock->last_reading }}</td>
                                <td>{{ $oilstock->fast_reading }}</td>
                                <td>{{ $oilstock->fast_dip }}</td>
                                
                                <td>{{ $oilstock->last_dip }}</td>
                                <td>10</td>
                              
                                <td>
                                    <a href="{{ route('oil.edit', $oilstock) }}" class="btn btn-primary">Edit</a>

                                    <form action="{{ route('oil.destroy', $oilstock) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                </td>

                            </tr>
                        @empty

                            <tr>
                                <td colspan="6" class="text-danger text-center">
                                    NO Oil Found
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
