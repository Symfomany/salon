        <section id="catOne">
            <ul class="collection">
                    @each('provider.accord', $resultatOne, 'resultat')
            </ul>
        </section>

        <section id="catTwo" class="hide">
                @each('provider.accord', $resultatTwo, 'resultat')
        </section>

         <section id="catThree" class="hide">
                @each('provider.accord', $resultatThree, 'resultat')
        </section>

         <section id="catFour" class="hide">
                @each('provider.accord', $resultatFour, 'resultat')
        </section>

         <section id="catFive" class="hide">
                @each('provider.accord', $resultatFive, 'resultat')
        </section>
                       