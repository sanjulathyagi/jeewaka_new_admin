<?php

namespace domain\Services\ProductService;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\StockReceive;
use App\Models\StockReturn;
use infrastructure\Facades\ImageFacade\ImageFacade;

class ProductService
{
    protected $product;

    public function __construct()
    {
        $this->product = new Product();
        $this->productImage = new ProductImage();
        $this->receive = new StockReceive();
        $this->returns = new StockReturn();
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

            $productImage = $this->productImage->productPrimaryImages(
                $product_id
            );
            $count = count($productImage);

            if ($count == 0) {
                $product->images()->create([
                    'image_id' => $image['created_image']->id,
                    'status' => 1,
                ]);
            } else {
                $product->images()->create([
                    'image_id' => $image['created_image']->id,
                ]);
            }
        }
    }

    public function imageDelete($image_id)
    {
        $product_image = $this->productImage->find($image_id);
        $product_image->delete();
    }

    public function imagePrimary($image_id)
    {
        $product_image = $this->productImage->find($image_id);
        $productImage = $this->productImage->productPrimaryImage(
            $product_image->product_id
        );
        foreach ($productImage as $image) {
            $image->status = ProductImage::STATUS['SECONDARY'];
            $image->save();
        }
        $product_image->status = ProductImage::STATUS['PRIMARY'];
        $product_image->save();
    }

    public function allReceive()
    {
        return $this->receive->all();
    }

    public function makeReceive($data)
    {
        return $this->receive->create($data);
    }

    public function receiveDelete($receive_id)
    {
        $receive = $this->receive->find($receive_id);
        $receive->update();
        return $receive->delete();
    }

    public function receiveCancel($receive_id)
    {
        $receive = $this->receive->find($receive_id);
        $receive->status = 2;
        $receive->update();
    }

    public function receiveApprove($receive_id)
    {
        $receive = $this->receive->find($receive_id);
        $receive->status = 1;
        $receive->update();

        $item =  $this->item->find($receive->item_id);

        $item->quantity = $item->quantity + $receive->quantity;
        $item->update();

    }

    public function allReturn()
    {
        return $this->returns->all();
    }

    public function makeReturn($data)
    {
        return $this->returns->create($data);
    }

    public function returnDelete($return_id)
    {
        $returns = $this->returns->find($return_id);
        $returns->update();
        return $returns->delete();
    }

    public function returnCancel($return_id)
    {
        $returns = $this->returns->find($return_id);
        $returns->status = 2;
        $returns->update();
    }

    public function returnApprove($return_id)
    {
        $returns = $this->returns->find($return_id);
        $returns->status = 1;
        $returns->update();

        $item =  $this->item->find($returns->item_id);

        $item->quantity = $item->quantity + $returns->quantity;
        $item->update();
    }
}
