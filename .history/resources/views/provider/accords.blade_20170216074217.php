        <section id="catOne">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="{{ asset('img/five.png') }}" class="responsive-img" />
                        </div>

                        <div class="col l10 m10 s12">
                        <ul>
                                @foreach($resultat as $item)
                                        <li>{{ $item }}</li>
                                @endforeach
                        </ul>
                                {{-- @each('provider.accord', $resultatOne->all(), 'resultat') --}}
                        </div>
                </div>
        </section>

        <section id="catTwo" class="hide">
            <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="{{ asset('img/one.png') }}" class="responsive-img" />
                        </div>

                        <div class="col l10 m10 s12">
                                @each('provider.accord', $resultatTwo->all(), 'resultat')
                        </div>
                </div>
        </section>

         <section id="catThree" class="hide">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="{{ asset('img/two.png') }}" class="responsive-img" />
                        </div>
                        <div class="col l10 m10 s12">
                                @each('provider.accord', $resultatThree->all(), 'resultat')
                        </div>
                </div>
        </section>

         <section id="catFour" class="hide">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="{{ asset('img/three.png') }}" class="responsive-img" />
                        </div>
                        <div class="col l10 m10 s12">
                                        @each('provider.accord', $resultatFour->all(), 'resultat')
                        </div>
                </div>
        </section>

         <section id="catFive" class="hide">
                <div class="row">
                        <div class="col l2 m2 s12">
                                <img src="{{ asset('img/four.png') }}" class="responsive-img" />
                        </div>
                        <div class="col l10 m10 s12">
                                @each('provider.accord', $resultatFive->all(), 'resultat')
                        </div>
                </div>
        </section>
                       