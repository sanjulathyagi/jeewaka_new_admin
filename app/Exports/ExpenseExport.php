<?php

namespace App\Exports;

use App\Models\Expense;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ExpenseExport implements FromView
{
    protected $data;

    public function view(): View
    {
        $response['expenses'] = Expense::all();
        return view('exports.expense-export')->with($response);
    }

    public function export($data)
    {
        $this->data = $data;
        return $this;

    }
}
