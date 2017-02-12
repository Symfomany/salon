<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">

        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
        <script>
            // rename myToken as you like
            window.myToken =  {{ 
                json_encode([
                    'csrfToken' => csrf_token(),
                ]); 
            }}
        </script>
    </head>
    <body>
        <div id="app"></div>    
        <script src="{{ asset('js/app.js') }}"></script> }}
    </body>
</html>