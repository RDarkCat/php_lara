<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Блог "Новости леса"</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

@include('shared.top-menu')

<!-- Page Content -->
<div class="container">

    <div class="row">
        @yield('content')
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@include('shared.footer')
<script type="application/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
