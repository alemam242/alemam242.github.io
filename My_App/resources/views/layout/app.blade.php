<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md. Al Emam</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/line-awesome.min.css">
    <link href="{{ asset('assets') }}/css/toastify.min.css" rel="stylesheet" />
    <script src="{{ asset('assets') }}/js/toastify-js.js"></script>
    <script src="{{ asset('assets') }}/js/axios.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/progress.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <div id="loader" class="LoadingOverlay">
        <div class="Line-Progress">
            <div class="indeterminate"></div>
        </div>
    </div>


    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        @yield('content')

    </div>
    <!-- //CONTENT WRAPPER -->



    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/aos.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    <script src="{{ asset('assets') }}/js/config.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

    <script>
        hideLoader();
    </script>

</body>

</html>
