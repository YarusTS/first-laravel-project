<!doctype html>
{{--<html lang="{{ \Illuminate\Support\Str::replace(getLocale()) }}">--}}
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} </title>
    <!--
    Template 2085 Neuron
    https://www.tooplate.com/view/2085-neuron
    -->
{{--        <link rel="stylesheet" href="resources/css/bootstrap.min.css">--}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400">

    {{--    <!-- Main css -->--}}
    {{--    <link rel="stylesheet" href="css/style.css">--}}
</head>
<body>
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">Neuron</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>

    </div>
</div>

@yield('content')

<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-5 col-md-offset-1 col-sm-6">
                <h3>Neuron Studio</h3>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                    labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                <div class="footer-copyright">
                    <p>Copyright &copy; 2017 Your Company - Design: Tooplate</p>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-1 col-sm-6">
                <h3>Talk to us</h3>
                <p><i class="fa fa-globe"></i> 512 Delicious Street, San Francisco, CA 10880</p>
                <p><i class="fa fa-phone"></i> 010-020-0990</p>
                <p><i class="fa fa-save"></i> info@company.com</p>
            </div>

            <div class="clearfix col-md-12 col-sm-12">
                <hr>
            </div>

            <div class="col-md-12 col-sm-12">
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-google-plus"></a></li>
                    <li><a href="#" class="fa fa-dribbble"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- SCRIPTS -->

{{--    <script src="js/jquery.js"></script>--}}
{{--    <script src="js/bootstrap.min.js"></script>--}}
{{--    <script src="js/particles.min.js"></script>--}}
{{--    <script src="js/app.js"></script>--}}
{{--    <script src="js/jquery.parallax.js"></script>--}}
{{--    <script src="js/smoothscroll.js"></script>--}}
{{--    <script src="js/custom.js"></script>--}}

@vite(['resources/css/app.css'])
@vite(['resources/css/bootstrap.min.css'])
@vite(['resources/css/font-awesome.min.css'])
@vite(['resources/css/magnific-popup.css'])

@vite(['resources/js/app.js'])
@vite(['resources/js/custom.js'])
@vite(['resources/js/bootstrap.min.js'])
@vite(['resources/js/particles.min.js'])
@vite(['resources/js/smoothscroll.js'])
@vite(['resources/js/jquery.js'])


{{--    @vite(['resources/fonts/font-awesome.min.css'])--}}
{{--@vite(['resources/fonts/FontAwesome.otf'])--}}
{{--@vite(['resources/fonts/fontawesome-webfont.ttf'])--}}
{{--@vite(['resources/fonts/fontawesome-webfont.woff'])--}}
{{--@vite(['resources/fonts/fontawesome-webfont.woff2'])--}}


</body>
</html>
