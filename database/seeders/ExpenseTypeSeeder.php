<?php

namespace Database\Seeders;

use App\Models\ExpenseType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            [
                'name' => 'Food',
            ],
            [
                'name' => 'Transportation',
            ],
            [
                'name' => 'Entertainment',
            ],
            [
                'name' => 'Shopping',
            ],
            [
                'name' => 'Others',
            ],
        ];
        foreach ($types as $type) {
            $check = ExpenseType::where('name',$type['name'])->first();
            if(!$check){
                ExpenseType::create('$type');
            }
        }
    }
}
