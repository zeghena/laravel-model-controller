<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>
    @vite(['resources/js/app',])
  </head>

  <body>
    @include('./partials/header')
    <h1>Ciao</h1>
    <div style="display:flex;">
    @foreach ($comics as $c)
        <p>{{$c['series']}}</p>
        <img src="{{$c['thumb']}}" alt="{{$c['thumb']}}" style="width: 100px; height: 100px; background-size: cover;">
    @endforeach
    </div>
    @include('./partials/footer')
  </body>

</html>
