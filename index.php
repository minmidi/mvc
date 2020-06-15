<?php
    // lấy tất cả url gửi lên project
    $url = isset($_GET['url']) ? $_GET['url'] : "/";

    // /* REQUIRE CÁC FILE */

    // // 1. Require thư viện util.php
    // require_once "./commoms/util.php";


    // // 2. Require HomeController
    // require_once "./app/controllers/HomeController.php";
    // // 3. Require ProductController
    // require_once "./app/controllers/ProductController.php";


    // // 4. Require BaseModels models
    // require_once './app/models/BaseModel.php';
    // // 5. Require Product models
    // require_once "./app/models/Product.php";
    // // 6. Require category models
    // require_once "./app/models/Product.php";


    // KHI SỬ DỤNG AUTOLOAD THÌ CHỈ CẦN REQIURE FILE AUTOLOAD TRONG VENDOR
    require_once './vendor/autoload.php';

    // Use Controller
    use App\Controllers\HomeController;
    use App\Controllers\CategoryController;
    use App\Controllers\ProductController;




    /* XỬ LÝ ĐƯỜNG DẪN */
    switch ($url)
    {
        case '/':
            $ctr = new HomeController();
            echo $ctr->index();
            break;

        case 'detail':
            $ctr = new HomeController();
            echo $ctr->detail();
            break;

        case 'contact':
            $ctr = new HomeController();
            echo $ctr->contact();
            break;

        case 'add-product':
            $ctr = new ProductController();
            echo $ctr->addForm();
            break;

        case 'list-category':
            $ctr = new CategoryController();
            echo $ctr->index();
            break;

        default:
            echo "đường dẫn không tồn tại";
            break;
    }
?>