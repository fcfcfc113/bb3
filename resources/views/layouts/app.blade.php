<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Belle Multipurpose Bootstrap 4 Html Template</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body class="template-index belle template-index-belle">
    @include('components.navbar') <!-- Thanh điều hướng -->

    <main>
        @yield('content') <!-- Nội dung trang -->
    </main>

    @include('components.footer') <!-- Footer -->
</body>

</html>
