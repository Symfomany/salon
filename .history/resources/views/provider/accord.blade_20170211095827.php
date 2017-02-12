<div class="row">
        <div class="col s12 l6 m6">
            <p class="truncate">{{ $resultats['intitule'] }}</p>
        </div>

        @foreach($resultat as $item)
            @if(!empty($item) && $loop->index != 0)
                <div> 
                    <div class="col l2 m2">
                        <p>{{ $item }} </p>
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
                            <input type="checkbox" />
                        </div>
                    </div>

                </div>
                @endif
        @endforeach
</div>
                       