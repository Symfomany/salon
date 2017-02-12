<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">

        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">

             <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

      
          
    </head>
    <body>
            
        <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Nom</label>
                </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Prénom</label>
                </div>

                 <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Entreprise</label>
                </div>

                 <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">SIRET</label>
                </div>


                 <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Fonction</label>
                </div>

                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Email</label>
                </div>
            </div>


        </form>



    <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
            var autocomplete =$('#el').autocomplete({
                limit: 20,
                multiple: {
                    enable: true,
                    maxSize: 10,
                    onExist: function (item) { /* ... */ },
                    onExceed: function (maxSize, item) { /* ... */ }
                },
                appender: {
                    el: '#someEl'
                },
                getData: function (value, callback) {
                    // ... 
                    callback(value, data);
                }
            });

        </script>
    </body>
</html>
