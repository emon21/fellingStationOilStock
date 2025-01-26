@extends('layouts.app')

@section('content')
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Create Oil</h3>
                        <a href="#" class="card-tools btn btn-primary">Back</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('oil.store') }}" method="POST">
                            @csrf
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group col-sm-3">
                                    <label for="tank_name">Tank Name</label>
                                    <input type="text" name="tank_name" id="tank_name" class="form-control">
                                </div>
                                <div class="form-group col-sm-3 px-3 py-4">
                                    <label for="tank_name">Select Tank :</label>
                                    <select name="tank_id" class="form-control select2 " placeholder="Select Tank...">
                                        <option value="0" disabled selected>Select Tank*</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->tank_name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">Tank Info :</label>
                                    <select class="form-control" style="width: 100%" hight="200px" name="tank_info">
                                    <option>orange</option>

                                </select>
                                </div>


                                <div class="form-group col-sm-3">
                                    <label for="matien_no">Matien No</label>
                                    <input type="text" name="matien_no" id="matien_no" class="form-control">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-group col-sm-2">
                                    <label for="last_reading">Last Reading</label>
                                    <input type="number" name="last_reading" id="last_reading" class="form-control">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="fast_reading">Fast Reading</label>
                                    <input type="number" name="fast_reading" id="fast_reading" class="form-control">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="fast_dip">Fast DIP</label>
                                    <input type="number" name="fast_dip" id="fast_dip" class="form-control">
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="fast_qty">Fast QTY</label>
                                    <input type="number" name="fast_qty" id="fast_qty" class="form-control">
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="last_dip">Last DIP</label>
                                    <input type="number" name="last_dip" id="last_dip" class="form-control">
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="last_qty">Last QTY</label>
                                    <input type="number" name="last_qty" id="last_qty" class="form-control">
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


@push('scripts')
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });


        $('.js-data-example-ajax').select2({
            ajax: {
                url: 'https://jsonplaceholder.typicode.com/posts',
                dataType: 'json'
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            }
        });
    </script>
@endpush



<script>
    // $(document).ready(function() {
    //     $('.select2').select2({
    //         placeholder: "Select an option", // Optional placeholder
    //         allowClear: true // Allow clearing the selection
    //     });
    // });
</script>

{{-- <script>
       $(document).ready(function() {
        $('.js-example-disabled-results').select2();
    });
</script> --}}
