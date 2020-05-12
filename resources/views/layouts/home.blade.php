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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('auth.login') }}" method="post">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email адрес</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Мы никому не передадим эту информацию</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            <small id="passwordHelp" class="form-text text-muted"><a href="{{ route('auth.register') }}">Не зарегестрированы?</a></small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <input type="submit" value="Войти" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top container" role="navigation">
        <div class="container">
            <div class="row naff">
                <div class="col-lg-9">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="nvb-logo" href="{{ request('redirect_url', '/') }}"><img src="https://psv4.userapi.com/c856320/u31501026/docs/d17/f0550a107961/KAI-Logo.png?extra=BL1YQRsY9ECJDYvGlUPVCgECYkNresK-6okIrrtwPwXLY1zWHejj5YqtErq9OL9oipNSQ00NMwfUYKxBZyc87kRQTbjFUvXmFv5SQ-RyA58VYLid9iptMzQvvJ2vFuXBxhXC7AQX7WDLfJ5LBMiu" width="150" class="d-inline-block align-top" alt="logo"></a>
                        <a class="navbar-brand" href="{{ request('redirect_url', '/') }}">Computer Science<br>с КНИТУ-КАИ</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">О нас</a>
                            </li>
                            <li>
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right">Войти</button>
                    @endif
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container content">

        <div class="row">

            <div class="col-md-3">

                @yield('sidebar')

            </div>

            <div class="col-md-9">

                <div class="row">

                    @yield('main')

                </div>

            </div>

        </div>
        <hr class="non-margin">
    </div>
    <!-- /.container -->
    <div class="footer">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="container">Copyright &copy; Computer Science с КНИТУ-КАИ 2020</p>
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

</html>
