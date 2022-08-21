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
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Categories</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0"> All Categories</h6>
        </nav>
    </div>
    <div class="col-lg-4 text-right d-flex flex-column justify-content-center">
        <a href="{{ route('categories.new') }}" class="btn btn-outline-white mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">New</a>
        </div>
</div>
@endsection
@section('content')
<div class="container-fluid mt-3 mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Categories</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Introduction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
