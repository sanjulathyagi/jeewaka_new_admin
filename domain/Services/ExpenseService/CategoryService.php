<?php

namespace domain\Services\expenseService;

use App\Models\expense;
use infrastructure\Facades\ImageFacade\ImageFacade;

class expenseService
{

    protected $expense;

    public function __construct()
    {
        $this->expense = new expense();
    }

    public function all()
    {
        return $this->expense->all();
    }

    public function get($expense_id)
    {
        return $this->expense->find($expense_id);
    }

    public function store($data)
    {
        if(isset($data['images'])){
            $image = ImageFacade::store($data['images'], [1,2,3,4,5]);
            $data['image_id'] = $image['created_images']->id;
        }
        return $this->expense->create($data);

    }

    public function delete($expense_id)
    {
        $expense = $this->expense->find($expense_id);
        $expense->delete();
        return $expense;
    }

    public function update($data, $expense_id)
    {
        $expense = $this->expense->find($expense_id);
        $expense->update($data);
        return $expense;

    }

    public function validateName($name)
    {
        return $expense = $this->expense->validateName($name);
    }

}
