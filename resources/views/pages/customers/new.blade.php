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
                        <a class="opacity-5 text-white" href="{{ route('customers.all') }}">
                            customers
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">New</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">New customers</h6>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid mt-5 justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="row mt-3 ">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input class="form-control" type="text" value="" onfocus="focused(this)"
                                    onfocusout="defocused(this)" placeholder="eg: Haircare" required>
                            </div>
                            <div class="col-md-12">
                                <label>category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="1">Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-12">
                                <label>Price</label>
                                <input class="form-control" name="price" type="number" step="0.01"
                                     placeholder="product price" required>
                            </div>
                            <div class="col-md-12">
                                <label>Quantity</label>
                                <input class="form-control" type="number" name="quantity"
                                    placeholder="available quantity" required>
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Description</label>
                                <textarea name="description" class="form-control" id="inp_description" cols="30" rows="10">
                            </textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary">Create</button>

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
