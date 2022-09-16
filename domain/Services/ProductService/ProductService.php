<?php

namespace domain\Services\ProductService;

use App\Models\Product;
use App\Models\ProductImage;
use infrastructure\Facades\ImageFacade\ImageFacade;

class ProductService
{
    protected $product;

    public function __construct()
    {
        $this->product = new Product();
        $this->productImage = new ProductImage();
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
        $product->is_active = $status;
        $product->save();
    }
    public function imageUpload($data, $product_id)
    {
        $product = $this->product->find($product_id);

        if (isset($data['images'])) {
            $image = ImageFacade::store($data['images'], [1, 2, 3, 4, 5]);
          

            $product->images()->create(['image_id' => $image['created_images']->id]);
        }
    }

    public function imageDelete($image_id)
    {
        $product_image = $this->product_images->find($image_id);
        $product_image->delete();
    }
}
