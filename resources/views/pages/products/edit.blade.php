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
                        <a class="opacity-5 text-white" href="{{ route('products.all') }}">
                            products
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0">Edit products</h6>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid mt-5 justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        <div class="row mt-3 ">
                            <div class="col-md-12">
                                <label>Name</label>
                                <input class="form-control" type="text" value="{{ $product->name }}"
                                    placeholder="eg: Haircare" required>
                            </div>
                            <div class="col-md-12">
                                <label>Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="1">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option
                                            value="{{ $category->id }}"{{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-12">
                                <label>Price</label>
                                <input class="form-control" name="price" type="number" step="0.01"
                                    placeholder="product price" value="{{ $product->price }}" required>
                            </div>
                            <div class="col-md-12">
                                <label>Quantity</label>
                                <input class="form-control" type="number" name="quantity" placeholder="available quantity"
                                    value="{{ $product->quantity }}" required>
                            </div>
                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                <label>Description</label>
                                <textarea name="description" class="form-control" value="{{ $product->description }}" id="inp_description"
                                    cols="30" rows="10">
                            </textarea>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('products.image.uploads',$product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label> Images</label>
                                <input class="form-control dropify" name="images" type="file"
                                    accept="image/jpg, image/jpeg, image/png" required>
                            </div>
                            <div class="col-md-17 mt-3">
                                <button class="btn btn-primary" type="submit">Uploads</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                        
                        @foreach ($product->images as $product_image )
                        {{-- {{ dd($product_image) }} --}}
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <a href="javascript:void(0)"
                                    onclick="confirmDelete('{{ route('products.image.delete',$product_image->id) }}','Do you want to delete this image?')"
                                     class="delete-image-btn">
                                        <i class="fa-solid fa-trash text-danger"></i>
                                    </a>
                                    <img src="{{ config('image.access_path') }}/{{ $product_image->image?$product_image->image->name:'' }}"
                                    alt="" class="img-fluid product-image">
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
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
    </script>
@endpush

@push('styles')
<style>
    .delete-image-btn {
        position: absolute;
        top:0rem;
        right:1rem;
    }
    .produtc-image{
        height:100px;
    }
</style>

@endpush
