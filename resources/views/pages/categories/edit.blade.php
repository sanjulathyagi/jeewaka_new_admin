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
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Edit Categories</h6>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid mt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input class="form-control" type="text" value="{{ $category->name }}" name="name"
                                    type="text" placeholder="eg.haircare" onfocus="focused(this)"
                                    onfocusout="defocused(this)">
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Introduction</label>
                                <textarea name="description" class="form-control" id="inp_description" cols="30" rows="10">
                                    {{ $category->description }}
                            </textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#inp_description'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
