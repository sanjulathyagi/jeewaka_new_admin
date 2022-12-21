<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'introduction',
        'image_id',
    ];

    public function images()
    {
        return $this->hasOne(Image::class,'id', 'image_id');

    }
    public function validateName($name)
    {
        $category = $this->where('name', $name)->first();
        if($category){
            return 1;
        }else{
            return 0;
        }
    }

}
