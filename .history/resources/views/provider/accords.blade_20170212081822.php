        <section id="catOne">

                <div class="row">
                        <div class="col l2 m2 s2">
                        <img src="{{ asset('img/five.png') }}" class="responsive-img" />
                        </div>
                        
                        <div class="col l2 m2 s2">
                        @each('provider.accord', $resultatOne, 'resultat')
            </div>
        </section>

        <section id="catTwo" class="hide">
                        <img src="{{ asset('img/one.png') }}" class="responsive-img" />

                @each('provider.accord', $resultatTwo, 'resultat')
        </section>

         <section id="catThree" class="hide">
                         <img src="{{ asset('img/two.png') }}" class="responsive-img" />

                @each('provider.accord', $resultatThree, 'resultat')
        </section>

         <section id="catFour" class="hide">
                         <img src="{{ asset('img/three.png') }}" class="responsive-img" />

                @each('provider.accord', $resultatFour, 'resultat')
        </section>

         <section id="catFive" class="hide">
                         <img src="{{ asset('img/four.png') }}" class="responsive-img" />

                @each('provider.accord', $resultatFive, 'resultat')
        </section>
                       