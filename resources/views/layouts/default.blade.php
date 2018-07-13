<!DOCTYPE html>
<html>
<head>
    @include('includes.head')

    <title></title>
</head>
<body>
@include('includes.header')
<div class="container">
    <div class="row justify-content-center">
        @yield('content')
    </div>
    
</div>


@include('includes.footer')
</body>
</html>