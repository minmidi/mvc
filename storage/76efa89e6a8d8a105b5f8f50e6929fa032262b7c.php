<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PT15111</title>

    <?php echo $__env->make('layout._share.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php echo $__env->make('layout._share.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- Page Content Holder -->
        <div id="content">

            <!-- header -->
            <?php echo $__env->make('layout._share.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->yieldContent('main'); ?>
        </div>
    </div>
    <!-- footer -->
    <?php echo $__env->make('layout._share.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/mvc/views/layout/master.blade.php ENDPATH**/ ?>