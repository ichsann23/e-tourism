<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.admin.css-exter')
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        @include('layouts.admin.navbar')

        <!-- side bar -->
        @include('layouts.admin.sidebar')

<!-- Content Header -->
@yield('content-header')
        <!-- Content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- footer -->
        @include('layouts.admin.footer')
        <!-- ./wrapper -->

        <!-- jQuery 3 -->

        @include('layouts.admin.js-exter')
</body>

</html>