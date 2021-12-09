<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medico en casa</title>
</head>
<body>
    
    @include('dashBoard.partials.navbar')

    <div class="container section">
        @include('dashBoard.partials.status')
        @yield('content')        
        
    </div>

    <script src="{{asset ('js/app.js')}}"></script>
</body>

</html>