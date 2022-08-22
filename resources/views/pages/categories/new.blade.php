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
    <div class="container-fluid mt-3 mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input class="form-control" name="name" type="text" placeholder="eg:Hair-Care">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
