@extends('layouts.app')
@section('header')
    <div class="row">
        <div class="col-lg-8">
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm">
                    <a class="opacity-5 text-white" href="{{ route('dashboard') }}">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">customers</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0"> All customers</h6>
        </nav>
        <div class="col-lg-4 text-right d-flex flex-column justify-content-center">
            <a href="{{ route('customers.new') }}"
                class="btn btn-outline-white mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">New</a>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid mt-3 mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">customers</div>
                <div class="card-body">
                    <table class="table-striped table-responsive table " id="customers_table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td></td>
                                    <td>
                                        {{-- <a href="{{ route('customers.edit', customer->id) }}"
                                            class="btn btn-outline-primary btn-sm ">Edit</a>
                                            <a href="{{ route('customers.edit', $customer->id) }}"
                                                class="btn btn-outline-danger btn-sm ">Delete</a> --}}
                                    </td>
                                    <td>{{ $customer->price }}</td>
                                    <td>{{ $customer->quantity }}</td>
                                    <td>
                                        @if ($customer->is_active == 1)
                                            <span class="badge rounded-pill text-bg-success">Active</span>
                                        @else
                                            <span class="badge rounded-pill text-big-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('customers.edit', '$customer->id') }}"
                                            class="btn btn-outline-primary btn-sm">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ route('customers.delete', 'customer->id') }}"
                                            class="btn btn-outline-danger btn-sm">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                        @if ($product->is_active == 0)
                                            <a href="{{ route('customers.status', [$customer->id, 1]) }}"
                                                class="btn btn-outline-success btn-sm">
                                                <i class="fa-solid fa-check-circle"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('customers.status', [$customer->id, 0]) }}"
                                                class="btn btn-outline-danger btn-sm">
                                                <i class="fa-solid fa-circle-xmark"></i>
                                            </a>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {

            $('#customers_table').DataTable({
                "language": {
                    "emptyTable": "No data available in the table",
                    "paginate": {
                        "previous": '<i class="fa-solid fa-angles-left"></i>',
                        "next": '<i class="fa-solid fa-angles-right"></i>'
                    },
                    "sEmptyTable": "No data available in the table"
                },
            });
        });
    </script>
@endpush
