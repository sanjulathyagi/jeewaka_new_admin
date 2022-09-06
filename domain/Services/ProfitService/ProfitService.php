<?php

namespace domain\Services\ProfitService;

use App\Models\Profit;
use infrastructure\Facades\ImageFacade\ImageFacade;

class ProfitService
{

    protected $profit;

    public function __construct()
    {
        $this->profit = new Profit();
    }

    public function all()
    {
        return $this->profit->all();
    }

    public function get($profit_id)
    {
        return $this->profit->find($profit_id);
    }

    public function store($data)
    {
        if(isset($data['images'])){
            $image = ImageFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        return $this->profit->create($data);

    }

    public function delete($profit_id)
    {
        $profit = $this->profit->find($profit_id);
        $profit->delete();
        return $profit;
    }

    public function update($data, $profit_id)
    {
        $profit = $this->profit->find($profit_id);
        $profit->update($data);
        return $profit;

    }

}
