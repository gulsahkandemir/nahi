<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{$title}} | Need a Hand</title>
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" content="{{URL::to('')}}">
        <meta name="twitter:title" content="Coming Soon! | Need a Hand">
        <meta name="twitter:domain" content="{{Request::server('HTTP_HOST')}}">
        <meta name="twitter:site" content="needahandin">
        <meta name="twitter:description" content="We're helping your friends to help you.
                Do you need help to organize a big baby shower?
                Or do you simply want one of your handy friends to help fix your sink?
                Just ask for hand using Need a Hand.">
        <meta property="twitter:image" content="{{URL::to('images/nahi-og-image.png')}}"/>

        <meta property="og:image" content="{{URL::to('images/nahi-og-image.png')}}"/>
        <meta property="og:title" content="Coming Soon! | Need a Hand"/>
        <meta property="og:description" content="We're helping your friends to help you.
                Are you moving to a new place? Do you need help to organize a big baby shower?
                Or do you simply want one of your handy friends to help fix your sink?
                Just ask for hand using 'Need a Hand'."/>
        <meta property="og:url" content="{{URL::to('')}}"/>
        <meta property="og:site_name" content="Need a Hand"/>
        <meta property="og:type" content="website"/>

        <link rel="stylesheet" type="text/css" href="/style/main.css">
        
        <script>
            var NH = {Config: {}};
            NH.Config.baseUrl = '{{URL::to('')}}'
            NH.Config.domain = '{{Request::server('HTTP_HOST')}}';
        </script>
        <script data-main="/scripts/main.js" src="/vendor/requirejs/require.js"></script>
    </head>
    <body class="{{$route}}">
        <div class="container">
            {{$body}}
        </div>
    </body>
</html>