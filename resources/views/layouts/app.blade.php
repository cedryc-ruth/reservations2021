<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}  :: @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
        @yield('head')
    </head>
    <body class="is-preload">
    <!-- Wrapper -->
        <div id="wrapper">
        <!-- Header -->
            <header id="header">
                <div class="inner">
                    <!-- Logo -->
                        <a href="index.html" class="logo">
                            <span class="symbol"><img src="{{ asset('images/logo.svg') }}" alt="" /></span><span class="title">Réservations</span>
                        </a>

                    <!-- Nav -->
                        <nav>
                            <ul>
                                <li><a href="#menu">Menu</a></li>
                            </ul>
                        </nav>
                </div>
            </header>

        <!-- Menu -->
            <nav id="menu">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="generic.html">Ipsum veroeros</a></li>
                    <li><a href="generic.html">Tempus etiam</a></li>
                    <li><a href="generic.html">Consequat dolor</a></li>
                    <li><a href="elements.html">Elements</a></li>
                </ul>
            </nav>

        <!-- Main -->
            <div id="main">
                <div class="inner">
                    <header>
                        <h1>@yield('title')</h1>
                        @yield('header')
                    </header>
                    <section class="tiles">
                        @yield('content')
                    </section>
                </div>
            </div>

        <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <section>
                        <h2>Get in touch</h2>
                        <form method="post" action="#">
                            <div class="fields">
                                <div class="field half">
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                </div>
                                <div class="field half">
                                    <input type="email" name="email" id="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <ul class="actions">
                                <li><input type="submit" value="Send" class="primary" /></li>
                            </ul>
                        </form>
                    </section>
                    <section>
                        <h2>Follow</h2>
                        <ul class="icons">
                            <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
                            <li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
                            <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
                            <li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
                        </ul>
                    </section>
                    <ul class="copyright">
                        <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>
            </footer>

        </div>
        
        <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/browser.min.js') }}"></script>
        <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/util.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
