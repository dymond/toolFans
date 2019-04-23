<!DOCTYPE html>
<html lang="en" class="h-full font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Nova::name() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('app.css', 'vendor/nova') }}">

    <style>
        html, body {
            background: rgb(0, 0, 0) no-repeat center center fixed; /* Old browsers */
            background: -moz-radial-gradient(center, ellipse cover, rgb(0, 32, 43) 1%, rgb(0, 0, 0) 100%); /* FF3.6+ */
            background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%, rgb(0, 32, 43)), color-stop(100%, rgb(0, 0, 0))); /* Chrome,Safari4+ */
            background: -webkit-radial-gradient(center, ellipse cover, rgb(0, 32, 43) 1%, rgb(0, 0, 0) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-radial-gradient(center, ellipse cover, rgb(0, 32, 43) 1%, rgb(0, 0, 0) 100%); /* Opera 12+ */
            background: -ms-radial-gradient(center, ellipse cover, rgb(0, 32, 43) 1%, rgb(0, 0, 0) 100%); /* IE10+ */
            background: radial-gradient(ellipse at center, rgb(0, 32, 43) 1%, rgb(0, 0, 0) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#a4c5fc', endColorstr='#4f8ff9', GradientType=1); /* IE6-9 fallback on horizontal gradient */
        }
    </style>

</head>
<body class="bg-40 text-black h-full">
<div class="h-full">
    <div class="px-view py-view mx-auto">
        @yield('content')
    </div>
</div>
</body>
</html>
