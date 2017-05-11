
<style type="text/css">
    .navbar-default{
        display: none;
    }
    .panel-default{
        margin-top:30px;
    }
</style>


<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staggler</title>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
     <!-- Resource style -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">  
    </head>
    <body>
    <!-- Scripts -->
<script>
    window.Laravel = {"csrfToken":"TcPkjxRpmoGxCnAZEr85xDgM9paaNmifgrnCCoWH"}    </script>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" style="font-family: 'madita';" href="{{url('/')}}">
                    <img src="{{asset('img/logo.svg')}}" height="30px;" ;>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Event</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h3 style="font-family: 'madita';margin:0px;">Staggler</h3></div>
                <div class="panel-body">
                @include('include.alert')
                    <form class="form-horizontal" role="form" method="POST" action="{{url('login')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{url('password/reset')}}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="http://localhost/stagglero/public/js/bootstrap.min.js"></script>
    <script src="http://localhost/stagglero/public/js/jquery.min.js"></script>
    <script src="http://localhost/stagglero/public/js/bootstrap.js"></script>
    

        <footer id="footer">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <ul class="footul">
                &copy; 2017 STAGGLER
                    <li>
                        <a href="#">About</a>
                    </li>
                    <!-- <li>
                        <a href="http://localhost/stagglero/public/aboutus">Advertise</a>
                    </li> -->
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="#">Terms of Service</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
</footer>        </body>
</html>