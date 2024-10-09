<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Premier exercice Laravel pour le cours de Marcos." />
        <meta name="author" content="Mateo-Thomas Fortin-Lubin" />
        <title>@yield('title')</title>
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Font Awesome icons (free version)-->
        <!-- <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> -->
        <!-- Google fonts-->
        <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" /> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="header_navigation" id="">
            <div class="header_navigation-haut">
                <nav class="navigation_reseaux">
                    <div>
                        <a class="social__link" href="https://www.facebook.com/">
                            <img class="social__icon" src="{{ asset('svg')}}/icon_facebook.svg" width="16" height="16"
                                alt="Facebook">
                        </a>
                    </div>
                    <div>
                        <a class="social__link" href="https://www.instagram.com/">
                            <img class="social__icon" src="{{ asset('svg')}}/icon_instagram.svg" width="16" height="16"
                                alt="Instagram">
                        </a>
                    </div>
                    <div>
                        <a class="social__link" href="https://www.linkedin.com/">
                            <img class="social__icon" src="{{ asset('svg')}}/icon_linkedin.svg" width="16" height="16"
                                alt="LinkedIn">
                        </a>
                    </div>
                    <div>
                        <a class="social__link" href="https://www.youtube.com/">
                            <img class="social__icon" src="{{ asset('svg')}}/icon_youtube.svg" width="16" height="16"
                                alt="Youtube">
                        </a>
                    </div>
                </nav>
            </div>
            <nav class="first-nav">
                <div class="center">
                    <a href="/">Home</a>
                    <a href="/about">About us</a>
                    <a href="/article">Articles</a>
                    <a href="/contact">Contact us !</a>
                </div>
            </nav>
        </nav>
        <!-- Content -->
        @yield('content')
        <!-- Footer-->
        <footer>
            
            <div class="footer-bottom">
                <div>© 2024 Exercice 01 Laravel</div>
                <div>
                    <a href="#">Terms</a> |
                    <a href="#">Privacy</a>
                </div>
            </div>
    </footer>
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        @yield('js')
    </body>
</html>
