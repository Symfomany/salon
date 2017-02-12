<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">

        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">


        <style>
            .margin{
                margin: 10px;
            }
            .switch{
                height: 28px;
            }
            .actions{
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
          
    </head>
    <body>
            
    <div class="row center-align">
        <div class="col s12 m6">
            <div class="card teal lighten-2 ">
                <div class="card-content white-text">
                    <span class="card-title">ORCAB</span>
                    <p>Coopérative  COBAB</p>
                </div>
            </div>
        </div>
    </div>
                

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#test1">Identification</a></li>
        <li class="tab col s4"><a href="#test2">Accords</a></li>
        <li class="tab col s4"><a href="#test3">Recapitulatif</a></li>
      </ul>
    </div>

    <div class="container">
    <div id="test1" class="col s12">
    <div class="row">
        <form >
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

                <div class="input-field col s12">
                    <i class="material-icons prefix">textsms</i>
                    <input type="text" id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Autocomplete</label>
                </div>
        </form>
    </div>
    </div>
    </div>
    <div id="test2" class="col s12">
        <div id="app">
            <div class="actions col offset-s6 s12">
                <div class="chip col s3" id="chipOne">
                    Souhaite être rattaché
                </div>
                <div class="chip col s3">
                    Déjà utilisateur
                </div>
            </div>
            <div class="row" v-for="(item, index) in 45">
                <div class="col s6">
                    <p>Fournitures de bureau et mobilier de bureau</p>
                </div> 
                <div class="col s2">
                        Inter-Hotel
                </div>
                <div class="col s2">
                    <div class="switch margin">
                        <label>
                        
                        <input type="checkbox">
                        <span class="lever"></span>
                        
                        </label>
                    </div>
                    <div class="switch margin">
                        <label>
                        Cenpac
                        <input type="checkbox">
                        <span class="lever"></span>
                        
                        </label>
                    </div>
                </div>
                
                <div class="col s2">
                    <div class="margin">
                        <input type="checkbox" v-bind:id="index + 100" />
                        <label v-bind:for="index + 100">Beta @{{ index + 1 }}</label>
                    </div>

                    <div class="margin">
                        <input type="checkbox" v-bind:id="index + 2" />
                        <label v-bind:for="index + 2">Beta @{{ index + 2 }}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="test3" class="col s12">
        <div class="row">
            <h1>Vos demandes de rattachements ont bien été prises en compte, vous recevrez un récapitulatif par e­mail.</h1>
            <p>PME CENTRALE vous remercie et vous souhaite une bonne journée !</p>
        </div>
    </div>
</div>


        <script src="{{ asset('js/app.js')}}"></script>

    <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

        <script>
         $(document).ready(function () {
            $('input.autocomplete').autocomplete({
                    data: {
                    "Apple": null,
                    "Microsoft": null,
                    "Google": 'http://placehold.it/250x250'
                    },
                    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
            });


            $('ul.tabs').tabs();

        });
        </script>
    </body>
</html>