@include('Admin.Layouts.nav')
@include('Admin.Layouts.header')

<div class="container mb-3" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    @yield('main-menu')
</div>

@include('Admin.Layouts.footer')
