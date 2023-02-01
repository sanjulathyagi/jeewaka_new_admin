<?php

namespace App\Exports;

use App\Models\Expense;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ExpenseExport implements FromView
{
    public function view(): View
    {
        $expenses = Expense::all();
        return view();
    }
}
