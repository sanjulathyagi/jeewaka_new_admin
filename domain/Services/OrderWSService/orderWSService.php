<?php

namespace domain\Services\OrderWSService;

use App\Models\Order;
use infrastructure\Facades\ImageFacade\ImageFacade;

class OrderWSService
{

    protected $order;

    public function __construct()
    {
        $this->order = new Order();
    }

    public function all()
    {
        return $this->order->all();
    }

    public function get($order_id)
    {
        return $this->order->find($order_id);
    }

    public function store($data)
    {
        if(isset($data['images'])){
            $image = ImageFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        return $this->order->create($data);

    }

    public function delete($order_id)
    {
        $order = $this->order->find($order_id);
        $order->delete();
        return $order;
    }

    public function update($data, $order_id)
    {
        $order = $this->order->find($order_id);
        $order->update($data);
        return $order;

    }

}
