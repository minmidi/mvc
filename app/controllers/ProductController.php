<?php

// tạo namespace
namespace App\Controllers;
use App\Models\Product;

class ProductController
{
    public function addForm()
    {
        $name = "giang";
        $slug = "giang";
        $price = 3002;
        $description = "test";

        $model = new Product();
        $model->name = $name; 
        $model->slug = $slug;
        $model->price = $price;
        $model->description = $description;
        $model->save();
    }

    public function editForm() 
    {
        $id = 8;
        $name = "giang 2";
        $slug = "giang 3";
        $price = 300;
        $description = "test 3";

        $model = Product::find($id);
        $model->name = $name; 
        $model->slug = $slug;
        $model->price = $price;
        $model->description = $description;
        $model->save();
    }

    public function deleteForm()
    {
        $id = $_GET['id'];
        Product::destroy($id);
    }
}
?>