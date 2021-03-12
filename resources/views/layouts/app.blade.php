</html>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
      @include('layouts.partials._nav')
      {{-- le contenus ou le body de de la page--}}
      @yield('content')
        {{--ce code represente le pieds de page--}}
      <footer>
      @yield('footer')
      </footer>
    </body>
</html>
