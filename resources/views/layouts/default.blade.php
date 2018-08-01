<!DOCTYPE html>
<html>
<head>
    @include('includes.head')

    <title></title>
</head>
<body>
@include('includes.header')
<div class="container">
    <div class="row justify-content-center"><br>
    	<div class="col-sm-12"><br>
        	@yield('content')
        </div>
    </div>

    
    
</div>




@include('includes.footer')
</body>
</html>