@extends('layouts.app')
@section('header')
    <div class="row">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-white" href="{{ route('dashboard') }}">
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-white" href="{{ route('categories.all') }}">
                            categories
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">New</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">New Categories</h6>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <div class="row mt-5 mt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3 ">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input class="form-control" type="text" value="" name="name"
                                    type="text" placeholder="eg.haircare">
                                <small id="expense_name_msg"></small>
                            </div>
                            <div class="col-md-12">
                                <label>Image</label>
                                <input class="form-control dropify" name="images" type="file"
                                    accept="image/jpg, image/jpeg, image/png" required>
                            </div>
                            <div class="col-12 col-sm-6 mt-3 ">
                                <label>Introduction</label>
                                <textarea name="description" class="form-control" id="inp_description" cols="30" rows="10">
                            </textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button id="submit_btn" type="submit" class="btn btn-primary">Create</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.dropify').dropify();

        ClassicEditor
            .create(document.querySelector('#inp_description'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

            $('#expense_name').on('key',function(){
                var name = $(this).val();
                var data = {
                };
                    $.ajax{{
                        url: "{{ route('categories.validate.name') }}" +page,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                        },
                        type: 'GET',
                        data: data,
                        success: function(response){
                            if (response==1) {
                                $('#expense_name_msg').html('expense already exists');
                                $('#expense_name_msg').addClass('text-danger').removeClass('text-success');
                                $('#submit_btn').attr('disabled', true);

                            } else {
                                $('#expense_name_msg').html('expense name is available');
                                $('#expense_name_msg').removeClass('text-danger').addClass('text-sucess');
                                $('#submit_btn').attr('disabled', false);

                            }
                        }

                     }};
            });
    </script>
@endpush
