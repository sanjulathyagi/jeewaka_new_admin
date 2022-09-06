<?php

namespace domain\Services\ProductService;

use App\Models\Product;

class ProductService
{
    protected $product;


    public function __construct()
    {
        $this->product = new Product();
    }

    public function all()
    {
        return $this->product->all();
    }

    public function get($product_id)
    {
        return $this->product->find($product_id);
    }

    public function store($data)
    {
        return $this->product->create($data);

    }

    public function delete($product_id)
    {
        $product = $this->product->find($product_id);
        $product->delete();

    }

    public function update($data, $product_id)
    {
        $product = $this->product->find($product_id);
        $product->update($data);
    }

    public function status($product_id, $status)
    {
        $product = $this->product->find($product_id);
        $product->is_active =$status;
        $product->save();
    }
}
