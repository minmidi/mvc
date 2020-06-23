<?php

    // tạo namespace
    namespace App\Controllers;
    use App\Models\Product;
     

    class HomeController extends BaseController
    {
        public function index()
        {
            $products = Product::all();
            return $this->render('homepage.index', ['listItem' => $products]);
            

            // $products = Product::where('price' , '<=' , 40000)
            //                     -> orderBy('price','desc')
            //                     ->limit(2)
            //                     ->get();
            // //dd($products);
           
            // include_once './views/homepage.php';
        }

        public function detail()
        {
            return "Trang chi tiết 1 sản phẩm";
        }

        public function contact()
        {
            return "Trang liên hệ của sản phẩm";
        }
    }
?>