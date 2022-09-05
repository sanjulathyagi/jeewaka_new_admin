<?php

namespace domain\Services;

use App\Models\product;

class ProductService
{
    protected $Product;

    public function __construct()
    {
        $this->Product = new product();
    }

    public function all()
    {
        return $this->Product->all();
    }

    public function get($Product_id)
    {
        return $this->Product->find($Product_id);
    }

    public function store($data)
    {
        return $this->Product->create($data);

    }

    public function delete($Product_id)
    {
        $Product = $this->Product->find($Product_id);
        $Product->delete();

    }

    public function update($data, $Product_id)
    {
        $Product = $this->Product->find($Product_id);
        $Product->update($data);
    }

    public function status($Product_id, $status)
    {
        $product = $this->Product->find($Product_id);
        $product->is_active =$status;
        $product->save();
    }
}
