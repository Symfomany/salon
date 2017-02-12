 <div class="row" id="list">

        <section id="catOne">
        {{ dump($resultatOne) }}
                @each('provider.accord', $resultatOne, 'resultat')
        </section>
</div>
                       