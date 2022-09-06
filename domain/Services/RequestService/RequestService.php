<?php

namespace domain\Services\RequestService;

use App\Models\Request;
use infrastructure\Facades\ImageFacade\ImageFacade;

class RequestService
{

    protected $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function all()
    {
        return $this->request->all();
    }

    public function get($request_id)
    {
        return $this->request->find($request_id);
    }

    public function store($data)
    {
        if(isset($data['images'])){
            $image = ImageFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        return $this->request->create($data);

    }

    public function delete($request_id)
    {
        $request = $this->request->find($request_id);
        $request->delete();
        return $request;
    }

    public function update($data, $request_id)
    {
        $request = $this->request->find($request_id);
        $request->update($data);
        return $request;

    }

}
