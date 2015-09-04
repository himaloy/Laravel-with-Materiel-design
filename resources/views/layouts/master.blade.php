<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel-with-Materiel-Design</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    {!! Html::style('css/roboto.min.css') !!}
    {!! Html::style('css/material.min.css') !!}
    {!! Html::style('css/ripples.min.css') !!}
</head>
<body>
    @include('partials.navbar')
    <div class="container">
      <div class="row">
          <div class="col-md-12">
             @yield('content')
          </div>
      </div>
    </div>
    @include('partials.footer')

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    {!! Html::script('js/ripples.min.js') !!}
    {!! Html::script('js/material.min.js') !!}
    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>
</body>
</html>