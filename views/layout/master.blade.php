<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PT15111</title>

    @include('layout._share.style')
  
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        @include('layout._share.sidebar')


        <!-- Page Content Holder -->
        <div id="content">

            <!-- header -->
            @include('layout._share.header')
            
            @yield('main')
        </div>
    </div>
    <!-- footer -->
    @include('layout._share.footer')
    

