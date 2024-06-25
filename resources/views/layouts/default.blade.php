<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="@yield('meta_desc')">
    @include('includes.head')              
</head>    

<body>
    <div class="page-wrapper">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>          
</body>

</html>         
