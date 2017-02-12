<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SALON ORCAB ­ 15/16/17 MARS 2017</title>

        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" />

        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

        <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

        <link  rel="stylesheet" href="{{ asset('css/main.css') }}" />

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    </head>
    <body>
        <div id="preloading">
            <div class="main-loader">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


    <div class="container">
            
    <div class="row">
        <div class="col l3 m4 s12">
            <a href="{{ route('home')}}"><img src="{{ asset('img/logo.png')}}" class="responsive-img" /></a>
        </div>
        <div class="col l3 m4 offset-l6 s12">
            <a href="{{ route('home')}}"><img src="{{ asset('img/pme.png')}}" class="responsive-img" /></a>
        </div>
    </div>

{{-- 
    <div class="row center-align">
        <h3 class="title">Salon ORCAB ­15/16/17 Mars 2017</h3>
    </div>       --}}

  <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#one">Identification</a></li>
        <li class="tab col s4 disabled"><a href="#two">Accords</a></li>
        <li class="tab col s4 disabled"><a href="#three">Recapitulatif</a></li>
      </ul>
    </div>
    </div>
    <div class="card-panel  lighten-2">
    
        <form action="{{ route('register')}}" method="post">
            {{ csrf_field() }}

            <div id="one" class="col s12">
                <div  class="row">
                        <div class="animated fadeIn input-field col l6 m6 s12" data-wow-delay="0.01s">
                            <i class="material-icons prefix">account_box</i>
                            <input pattern=".{2,}" required id="lastname" name="lastname" type="text" class="validate">
                            <label for="lastname">Nom*</label>
                        </div>

                        <div  class="animated fadeIn input-field col s12 m6 l6">
                            <i class="material-icons prefix">account_box</i>
                            <input  pattern=".{2,}" required id="firstname" name="firstname" type="text" class="validate">
                            <label for="firstname">Prénom*</label>
                        </div>

                        <div class=" animated fadeIn input-field col s12 m6 l6">
                            <i class="material-icons prefix">home</i>
                            <input pattern=".{2,}" required name="compagny" id="compagny" type="text" class="validate">
                            <label for="compagny">Entreprise*</label>
                        </div>

                            <div class=" animated fadeIn input-field col s12 m6 l6">
                            <i class="material-icons prefix">fingerprint</i>
                            <input autocomplete="off" name="siren" placeholder="Format: 552 100 554" pattern="^(RCS )?([0-9]{3} ){2}[0-9]{3}$|^([0-9]{3} ){3}[0-9]{4}$" required id="siren" type="text" class="validate">
                            <label for="siren">SIREN*</label>
                            </div>

                        <div  class=" animated fadeIn input-field col s12 m6 l6">
                        <i class="material-icons prefix">assignment_ind</i>
                            <input pattern=".{2,}" name="fonction" required id="fonction" type="text" class="validate">
                            <label for="fonction">Fonction*</label>
                        </div>

                        <div class=" animated fadeIn input-field col s12 m6 l6">
                            <i class="material-icons prefix">email</i>
                            <input name="email" autocomplete="off" required id="email" type="email" class="validate">
                            <label for="email">Email*</label>
                            {{-- <span id="emailAlready" class="animated fadeInDown" style="display:none"><small><i class="material-icons">warning</i> Votre email existe déjà</small></span> --}}
                        </div>

                            <div  class="animated fadeIn input-field col s12 m6 l6">
                            <i class="material-icons prefix">contact_phone</i>
                            <input autocomplete="off" placeholder="Format: XX-XX-XX-XX-XX" pattern="^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$" required name="phone" id="phone" type="text" class="validate">
                            <label for="phone">Téléphone*</label>
                        </div>

                        <div class="animated fadeIn input-field col s12 m6 l6">
                            <i class="material-icons prefix">card_travel</i>
                            <input name="cooperative" autocomplete="off" pattern=".{2,}" required type="text" 
                            id="autocomplete-input" class="autocomplete">
                            <label for="autocomplete-input">Coopérative*</label>
                        </div>
                    </div>
                    <div class="row save">
                        <button type="button" disabled class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Enregistrer</button>
                    </div>
            </div>

            <div id="two" class="col s12">
                        <div  class="row">
                            <div class="actions col  offset-l8 offset-s6 offset-m8 s12">
                                <div class="chip col l2 m2 s6" id="chipOne">
                                    Etre rattaché
                                </div>
                                <div class="chip col l2 m2 s6">
                                    Déjà utilisateur
                                </div>
                            </div> 
                        </div>   

                        <div class="row" id="list">
                            <i>Chargement des accords...</i>
                            <div class="progress">
                                <div class="indeterminate">
                                </div>
                            </div>
                        </div>


                        <div class="row naviguations center-align">
                            <button type="button" disabled class="btn waves-effect waves-light" id="moins"><i class="material-icons">keyboard_arrow_left</i> Précédent</button>
                            <button type="button"  class="btn waves-effect waves-light" id="plus"><i class="material-icons">keyboard_arrow_right</i> Suivant</button>
                        </div>

            </div>
        </form>
        <div id="three" class="col s12 center-align animated zoomInUp">
            <h5>Vos demandes de rattachements ont bien été prises en compte, vous recevrez un récapitulatif par e­mail.</h5>
            <p>PME CENTRALE vous remercie et vous souhaite une bonne journée !</p>
            <img class="responsive-img" src="{{ asset('img/categories.png') }}" />
        </div>
        
        
        {{-- end card --}}
        </div>

    
    
    {{-- end container --}}

 
</div>

   <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l12 s12">
                <h5 class="white-text">Salon ORCAB</h5>
                <p class="grey-text text-lighten-4">Salon ORCAB Du 15/16/17 Mars 2017 autour de plus de <b>52 Coopératives</b> ORCAB</p>
              </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Copyright PME Centrale
            <a class="grey-text text-lighten-4 right" href="http://www.pmecentrale.fr/">Le site de PME Centrale</a>
            </div>
          </div>
        </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
    
    
    </body>
</html>
