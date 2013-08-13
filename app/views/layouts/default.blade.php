<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="/style/main.css">
        <script data-main="/js/main.js" src="/vendor/requirejs/require.js"></script>
    </head>
    <body class="{{$route}}">
        <div class="container">
            {{$body}}
        </div>
    </body>
</html>