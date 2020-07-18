@yield('title')

@include('paintings.includes.header')

@include('paintings.includes.sidebar')

<div id="app">
    @yield('content')
</div>

@include('paintings.includes.footer')