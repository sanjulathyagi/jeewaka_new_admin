<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StockReceive extends Model
{
    use HasFactory;

    const STATUS = ['PENDING' => 0, 'APPROVE' => 1, 'CANCEL' => 2];

    protected $fillable = [
        'item_id',
        'quantity',
        'status',
    ];

    public function items()
    {
        return $this->hasOne(Item::class, 'id', 'item_id');
    }
}

