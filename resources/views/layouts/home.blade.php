<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $page_title or 'Computer Science' }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/homepage.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700&amp;subset=cyrillic,cyrillic-ext,latin-ext">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top container" role="navigation">
        <div class="container">
            <div class="row naff">
                <div class="col-lg-9">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="nvb-logo" href="https://kai.ru"><img src="{{URL::to('/'). '/kai_logo.png'}}" width="150" class="d-inline-block align-top" alt="logo"></a>
                        <a class="navbar-brand" href="{{ request('redirect_url', '/') }}">Computer Science<br>с КНИТУ-КАИ</a>
                    </div>

                </div>
                <div class="col-lg-3">
                    @if (Auth::check())
                        <div style="color:white" class="logout">
                            <p>Вошли как {{ Auth::user()->email }}</p>
                            <form action="{{ route('auth.logout') }}" method="post" class="logout">
                                {{ csrf_field() }}
                                <input type="submit" value="Выйти" class="btn btn-info">
                            </form>
                        </div>
                    @else
                    <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; margin: 10px;">Войти</button> -->
                        <a href="{{ route('auth.login') }}"><button type="button" class="btn btn-primary" style="float: right; margin: 10px;">Войти</button></a>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container content">

        <div class="row justify-content-center">

            @yield('sidebar')

            @yield('main')

        </div>
    </div>
    <!-- /.container -->
    <div class="footer">

        <hr class="non-margin">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="container">Copyright &copy; Computer Science с КНИТУ-КАИ 2020<br>Разработано студентом КИТ-КАИ в рамках дипломного проекта.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

</body>
<!--
by @hghsergor,
Sergey Gorbachev
-->
</html>
