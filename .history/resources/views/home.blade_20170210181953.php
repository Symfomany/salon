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

        <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

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
            .save{
                margin:20px;
            }
            h3.title{
                font-size:1.2rem;
            }
        </style>
          
    </head>
    <body>
    <div class="container">
            
    <div class="row">
        <div class="col l2 m6 s12">
            <img src="{{ asset('img/logo.png')}}" class="responsive-img" />
        </div>
        <div class="col l2 m6 offset-l12 l12">
            <img src="{{ asset('img/pme.png')}}" class="responsive-img" />
        </div>
    </div>

    <div class="row">
        <h3 class="title">SALON ORCAB ­15/16/17 MARS 2017</h3>
    </div>      

  <div class="progress">
      <div class="indeterminate"></div>
  </div>

  <div class="row ">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#one">Identification</a></li>
        <li class="tab col s4 "><a href="#two">Accords</a></li>
        <li class="tab col s4 disabled"><a href="#three">Recapitulatif</a></li>
      </ul>
    </div>

    <div id="one" class="col s12">
        <form>
                <div class="animated fadeIn input-field col l6 m6 s12" data-wow-delay="0.01s">
                    <i class="material-icons prefix">account_circle</i>
                    <input pattern=".{2,}" required id="lastname" name="lastname" type="text" class="validate">
                    <label for="lastname">Nom</label>
                </div>

                <div data-wow-delay="0.02s" class="wow animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">account_circle</i>
                    <input pattern=".{2,}" required id="firstname" namd="firstname" type="text" class="validate">
                    <label for="firstname">Prénom</label>
                </div>

                <div data-wow-delay="0.03s" class="wow animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">home</i>
                    <input pattern=".{2,}" required name="compagny" id="compagny" type="text" class="validate">
                    <label for="compagny">Entreprise</label>
                </div>

                 <div data-wow-delay="0.04s" class="wow animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">fingerprint</i>
                    <input placeholder="Format: 552 100 554" pattern="^(RCS )?([0-9]{3} ){2}[0-9]{3}$|^([0-9]{3} ){3}[0-9]{4}$" required id="last_name" type="text" class="validate">
                    <label for="last_name">SIREN</label>
                 </div>

                <div data-wow-delay="0.05s" class="wow animated fadeIn input-field col s12 m6 l12">
                <i class="material-icons prefix">perm_identity</i>
                    <input pattern=".{2,}" required id="fonction" type="text" class="validate">
                    <label for="fonction">Fonction</label>
                </div>

                <div data-wow-delay="0.06s" class="wow animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">email</i>
                    <input  required id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>

                 <div data-wow-delay="0.07s" class="wow animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">phone</i>
                    <input placeholder="Format: XX-XX-XX-XX-XX" pattern="^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$" required name="text" id="phone" type="text" class="validate">
                    <label for="phone">Téléphone</label>
                </div>

                <div data-wow-delay="0.08s" class="wow animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">card_travel</i>
                    <input pattern=".{2,}" required type="text" 
                    id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Coopérative</label>
                </div>
                
                <div class="row save center-align">
                    <button disabled class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Enregistrer</button>
                </div>
        </form>
    </div>

    <div id="two" class="col s12">
            
            <div id="app">
                <div class="actions col  offset-l8 offset-m8 s12">
                    <div class="chip col l2 m2 s6" id="chipOne">
                        Souhaite être rattaché
                    </div>
                    <div class="chip col l2 m2 s6">
                        Déjà utilisateur
                    </div>
                </div>  

                <section id="catOne">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l6 m6">
                            <p class="truncate">Protection incendie</p>
                        </div>
                    
                        <div> 
                            <div class="col l2 m2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2 m2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2 m2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2">Beta @{{ index + 2 }}</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>


                <section id="catTwo" class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Assurances de personnes, Mutuelles, Prévoyance</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2">Beta @{{ index + 2 }}</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                

                <section id="catThree"  class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Location de Matériels</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2">Beta @{{ index + 2 }}</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section id="catFour"  class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Réparation et remplacement vitrage véhicules</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2">Beta @{{ index + 2 }}</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                 
                <section id="catFive"  class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Location et Entretien de Vêtements de travail</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                 


                <div class="row naviguations">
                    <button class="waves-effect waves-light btn-large"><i class="material-icons">keyboard_arrow_left</i> Précédent</button>
                    <button class="waves-effect waves-light btn-large"><i class="material-icons">keyboard_arrow_right</i> Suivant</button>
                </div>


            </div>
    </div>

    <div id="three" class="col s12">
        <div class="row">
            <h1>Vos demandes de rattachements ont bien été prises en compte, vous recevrez un récapitulatif par e­mail.</h1>
            <p>PME CENTRALE vous remercie et vous souhaite une bonne journée !</p>
        </div>
    </div>

    {{-- end container --}}
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

    <script>
         $(document).ready(function () {


            $('input#autocomplete-input').autocomplete({
                data: {
                    "Macrosoft": null,
                    "Macintosh": null,
                    "Macbook": null,
                    "Marshall": null,
                    "Matuidi": null
                },
            });

            $('input').on('keyup blur',function(){

                 console.log($('.invalid').length);

                 if($('.invalid').length){
                    $('form button').attr('disabled', true);
                 }else{
                    $('form button').attr('disabled', false);
                 }
             });

        });
    </script>

    <script src="{{ asset('js/app.js')}}"></script>
    
    </body>
</html>
