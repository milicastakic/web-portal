<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header id="header">
        @include('includes.header')
    </header>
    <section id="navArea">
        @yield('nav')
    </section>
    <section id="newsSection">
        @yield('latestNews')
    </section>
    <section id="sliderSection">
        @yield('slider')
    </section>
    <section id="weatherForecast">
        @yield('weather')
    </section>
    <section id="contentSection">
        @yield('content')
    </section>
    <footer id="footer">
        @yield('footer')
    </footer>
</div>
@include('includes.bodyScripts')
</body>
</html>