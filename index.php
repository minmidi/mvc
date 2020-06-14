<?php
    // lấy tất cả url gửi lên project
    $url = isset($_GET['url']) ? $_GET['url'] : "/";

    /* REQUIRE CÁC FILE */
    // 1. Require thư viện util.php
    require_once "./commoms/util.php";
    // 2. Require HomeController
    require_once "./app/controllers/HomeController.php";
    // 2. Require HomeController
    require_once "./app/controllers/ProductController.php";

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

        default:
            echo "đường dẫn không tồn tại";
            break;
    }
?>