<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js" async defer></script>
    </head>
    <body>
     
        <div id="AccountingApp">
            <router-view></router-view>
        </div>


    </body>
</html>