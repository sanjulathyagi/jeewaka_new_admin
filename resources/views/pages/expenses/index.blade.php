@extends('layouts.app')
@section('header')
    <div class="row">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm">
                        <a class="opacity-5 text-white" href="{{ route('dashboard') }}">
                            <i class="fa-solid fa-house" class="icon_color"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">expenses</li>
                </ol>
                <h6 class="font-weight-bolder text-white mb-0"> All expenses</h6>
            </nav>
        </div>
        <div class="col-lg-4 text-right justify-content-center">
            <a href="{{ route('expenses.new') }}"
                class="btn btn-outline-white mb-0  mt-2">Add New</a>
            <button type="button "data-bs-toggle="modal" data-bs-target="#exampleModal"
                class="btn btn-outline-white mb-0  mt-2">Export</button>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid mt-3 mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">expenses</div>
                <div class="card-body">
                    <table class="table-striped table-responsive table " id="expense_table">
                        <thead>
                            <tr>
                                <th>Reason</th>
                                <th>Amount</th>
                                <th>Remark</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->type?$expense->type->name:'N/A' }}</td>
                                    <td>
                                       {{ $expense->amount }}
                                    </td>
                                    <td>
                                        {{ !!$expense->remark }}
                                    </td>
                                    <td>
                                        <a href="{{ route('expenses.edit', $expense->id) }}"
                                            class="btn btn-outline-primary btn-sm ">
                                            <i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="javascript:void(0)" onclick="delconf('{{ route('expenses.delete', $expense->id) }}','Do you want to delete this expense - {{ $expense->name }}?')"
                                            class="btn btn-outline-danger btn-sm ">
                                            <i class="fa-solid fa-trash"></i></a>
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

@push('modals')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Export Expenses</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('expenses.export') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3 ">

                    <div class="col-md-12">
                        <label>Start Date</label>
                        <input class="form-control" type="date" name="start_date" placeholder="Enter start Date" id="start_date">
                    </div>

                    <div class="col-md-12">
                        <label>End Date</label>
                        <input class="form-control" type="date" name="End_date" placeholder="Enter End Date" id="End_date">

                    </div>
                    <div class="col-md-12 mt-3">
                        <button id="submit_btn" type="submit" class="btn btn-primary">Export</button>

                    </div>

                </div>
            </form>

        </div>

      </div>
    </div>
  </div>
@endpush



@push('scripts')
    <script>
        $(document).ready(function() {
            $('#expense_table').DataTable({
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
