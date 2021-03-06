<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style(elixir('assets/css/backend/backend.css')) }}
    <title>Application | Login</title>
</head>
<body class="login-page">
    
    @yield('content')

    {{ HTML::script('vendor/jquery/jquery-2.2.3.min.js') }}
    {{ HTML::script('vendor/bootstrap/js/bootstrap.min.js') }}
</body>
</html>
