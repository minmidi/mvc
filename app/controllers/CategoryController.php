<?php

    // tạo namespace
    namespace App\Controllers;
    use App\Models\Category;


    class CategoryController
    {
        public function index()
        {
            echo 'danh sách category';
        }

        public function addData()
        {
            $name = 'bưởi';
            $slug = 'hoa quả';
            $model = new Category();

            $model->name = $name;
            $model->slug = $slug;

            $model->save(); 
        }
    }
?>