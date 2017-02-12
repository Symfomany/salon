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
        
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            new WOW().init();
        </script> --}}

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
            .chip{
                font-size: 11px;
                text-align: center;
            }
            .save{
                margin:20px;
            }
            h3.title{
                font-size:1.2rem;
            }
            .item{
                border-bottom: 1px dotted #ddd;
                padding-top: 20px;
            }
            .intitule{
               
            }
            .marque{
                font-weight: bold;
                margin: 0;
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

  <div class="row ">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#one">Identification</a></li>
        <li class="tab col s4"><a href="#two">Accords</a></li>
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

                <div  class="animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">account_circle</i>
                    <input  pattern=".{2,}" required id="firstname" namd="firstname" type="text" class="validate">
                    <label for="firstname">Prénom</label>
                </div>

                <div class=" animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">home</i>
                    <input pattern=".{2,}" required name="compagny" id="compagny" type="text" class="validate">
                    <label for="compagny">Entreprise</label>
                </div>

                 <div class=" animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">fingerprint</i>
                    <input autocomplete="off" placeholder="Format: 552 100 554" pattern="^(RCS )?([0-9]{3} ){2}[0-9]{3}$|^([0-9]{3} ){3}[0-9]{4}$" required id="siren" type="text" class="validate">
                    <label for="siren">SIREN</label>
                 </div>

                <div  class=" animated fadeIn input-field col s12 m6 l12">
                <i class="material-icons prefix">perm_identity</i>
                    <input pattern=".{2,}" required id="fonction" type="text" class="validate">
                    <label for="fonction">Fonction</label>
                </div>

                <div class=" animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">email</i>
                    <input autocomplete="off" required id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>

                 <div  class="animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">phone</i>
                    <input autocomplete="off" placeholder="Format: XX-XX-XX-XX-XX" pattern="^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$" required name="text" id="phone" type="text" class="validate">
                    <label for="phone">Téléphone</label>
                </div>

                <div  class="animated fadeIn input-field col s12 m6 l12">
                    <i class="material-icons prefix">card_travel</i>
                    <input autocomplete="off" pattern=".{2,}" required type="text" 
                    id="autocomplete-input" class="autocomplete">
                    <label for="autocomplete-input">Coopérative</label>
                </div>
                
                <div class="row save center-align">
                    <button type="button" disabled class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Enregistrer</button>
                </div>
        </form>
    </div>

    <div id="two" class="col s12">
            
                <div class="actions col  offset-l6 offset-m8 s12">
                    <div class="chip col l2 m2 s6" id="chipOne">
                        Etre rattaché
                    </div>
                    <div class="chip col l2 m2 s6">
                        Déjà utilisateur
                    </div>
                </div>  

                <div class="row" id="list">
                    <i>Chargement des accords...</i>
                    <div class="progress">
                        <div class="indeterminate">
                        </div>
                    </div>
                </div>


                <div class="row naviguations">
                    <button class="waves-effect waves-light btn-large" id="moins"><i class="material-icons">keyboard_arrow_left</i> Précédent</button>
                    <button class="waves-effect waves-light btn-large" id="plus"><i class="material-icons">keyboard_arrow_right</i> Suivant</button>
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


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.9/jquery.mask.min.js"></script>

<script>
$(document).ready(function(){
  $('input#siren').mask('000 000 000');
  $('input#phone').mask('00 00 00 00 00');
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>

<script>
$(function() {
    
    var regex = /.{2,}/;
    var regexSiren = /^(RCS )?([0-9]{3} ){2}[0-9]{3}$|^([0-9]{3} ){3}[0-9]{4}$/;
    var regexPhone = /^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/;
    var regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    function isFormValid(){
        return ($('.invalid').length == 0 &&
            $('#lastname').val().match(regex) &&
            $('#firstname').val().match(regex) &&
            $('#compagny').val().match(regex) &&
            $('#fonction').val().match(regex) &&
            $('#email').val().match(regexEmail) &&
            $('#phone').val().match(regexPhone) &&
            $('#siren').val().match(regexSiren));
    }

    
     $('form button[type="button"]').click(function(){
          if(isFormValid()){
               $('.tabs .tab:eq(1)').removeClass('disabled');
               $('ul.tabs').tabs('select_tab', 'two');
            }
     });

    $('input.autocomplete').autocomplete({
        limit: 52,
        data: {
            "Macrosoft": null,
            "Macintosh": null,
            "Macbook": null,
            "Marshall": null,
            "Matuidi": null
        },
        onAutocomplete: function(item){
            $.get("accord/" + item.toLowerCase(), function(data) {
                    $("div#list").html(data);
            });

            if(isFormValid()){
                $('form button').attr('disabled', false);
                
            }
        }
    });

 
    $('input.autocomplete').keyup(function(e){
        if(e.which != 13) {
            $('form button').attr('disabled', true);
        }
    });

    $('input:not(".autocomplete")').on('keyup blur',function(){
        if(!isFormValid()){
            $('form button').attr('disabled', true);
        }
    }); 

    $('div#two').on('change', ':checkbox.already', function(){
        if($(this).is(":checked")){
            $(this).parents('div.feature').find('p.marque').addClass('blue-text');
        }else{
            $(this).parents('div.feature').find('p.marque').removeClass('blue-text');
        }
    });

  $('div#two').on('change', ':checkbox.discover', function(){
        if($(this).is(":checked")){
            $(this).parents('div.feature').find('p.marque').addClass('teal-text');
        }else{
            $(this).parents('div.feature').find('p.marque').removeClass('teal-text');
        }
    });

    var nb = 0;
    $('.naviguations button#plus').click(function(){
        nb++;
        console.log("lala")
        $('#row section').addClass('hide')
        $('#row section:eq('+nb+')').removeClass('hide');
    });

    $('.naviguations button#moins').click(function(){
        if(nb > 0){
            nb--;
            $('#list section').addClass('hide', function(){
                $('#list section:eq('+nb+')').removeClass('hide');
            });
        }
    });

});
</script>

    </body>
</html>
