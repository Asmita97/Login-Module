<html>  
<head>
<meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    
    
</head>
    <body>
        <ul class="nav nav-pills">
            @if(\Auth::check())
            <li>
            {{ link_to_route('logout','Logout') }}
            </li>
        </ul>
        @endif
        
    @yield('content')
    </body>
</html>