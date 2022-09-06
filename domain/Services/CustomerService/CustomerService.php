<?php

namespace domain\Services\CustomerService;

use App\Models\Customer;
use infrastructure\Facades\ImageFacade\ImageFacade;

class CustomerService
{

    protected $category;

    public function __construct()
    {
        $this->category = new Customer();
    }

    public function all()
    {
        return $this->category->all();
    }

    public function get($category_id)
    {
        return $this->category->find($category_id);
    }

    public function store($data)
    {
        if(isset($data['images'])){
            $image = ImageFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        return $this->category->create($data);

    }

    public function delete($category_id)
    {
        $category = $this->category->find($category_id);
        $category->delete();
        return $category;
    }

    public function update($data, $category_id)
    {
        $category = $this->category->find($category_id);
        $category->update($data);
        return $category;

    }

}
