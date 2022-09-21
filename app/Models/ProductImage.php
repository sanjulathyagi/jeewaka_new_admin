<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    const STATUS = [
        'PRIMARY' => 1,
        'SECONDARY' => 0,
    ];
    protected $fillable = [
        'product_id',
        'image_id',

    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function image()
    {
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

    public function productPrimaryImage($product_id)
    {
        return $this->where('product_id',$product_id)->where('status', self::STATUS['PRIMARY'])->get();
    }



}
