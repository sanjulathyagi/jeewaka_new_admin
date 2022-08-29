<?php

namespace domain\Services\CategoryService;

use App\Models\Category;

class CategoryService
{

    protected $category;

    public function __construct()
    {
        $this->category = new Category();
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
