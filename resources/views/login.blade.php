<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AGENDA | Login</title>

    <link href="{{asset('templates/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('templates/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{asset('templates/css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('templates/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">AH</h1>

            </div>
            <h3>Welcome to Agenda</h3>
            <p>
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Masuk dan Lihatlah Agenda Anda</p>
            <form class="m-t" role="form" action="{{url('/home')}}">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <a href="{{url('/home')}}"><button type="submit" class="btn btn-primary block full-width m-b">Masuk</button></a>

                <a href="{{url('/forgot')}}"><small>Lupa password?</small></a>
                <p class="text-muted text-center"><small>Tidak mempunyai akun?</small></p>
                <a href="{{url('/home')}}"><small>Halaman Agenda</small></a>
                <a class="btn btn-sm btn-white btn-block" href="{{url('/register')}}">Buat akun sekarang</a>
            </form>
            <p class="m-t"> <small>AGENDA &copy; 2019</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
