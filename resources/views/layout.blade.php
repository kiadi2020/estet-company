<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/logo.css">
    <link rel="stylesheet" href="/style/content.css">
    <link rel="stylesheet" href="/style/auth.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
   @include('inc.header')

   @if(Request::is('/'))
       @include('inc.slider')
   @endif

    <div class="container mt-5">

        <div class="row">
            <div class="container">
                @if(Request::is('/'))
                @include('inc.hero')
                @endif
            </div>
            <div class="container">
                @yield('home_content')
            </div>
            <div class="container">
                @if(Request::is('/'))
                @include('inc.aside')
                    @endif
            </div>
            <div class="container">
                @if(Request::is('/'))
                    @include('inc.servs')
                @endif
            </div>
            <div class="col-8">

            </div>
        </div>
    </div>
   @include('inc.footer')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>
