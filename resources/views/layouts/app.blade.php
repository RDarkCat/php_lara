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
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 float-right">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                    </div>
                </div>
            </div>

            <!-- Category Widget -->

            <x-categories :categories="$categories ?? []"></x-categories>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@include('shared.footer')
<script type="application/javascript" src="{{ asset('js/app.js') }}"></script>

@stack('someJavascript')

</body>

</html>
