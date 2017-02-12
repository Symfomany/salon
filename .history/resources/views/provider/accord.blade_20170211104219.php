<div class="row">
        <div class="col s12 l6 m6">
            <p class="truncate">{{ $resultat['intitule'] }}</p>
        </div>

       <div class="col s12 l6 m6">
        @foreach($resultat as $item)
            @if(!empty($item) && $loop->index != 0)
                <div class="row">
                    <div class="col l4 m4 s12">
                        <p>{{ $item }} </p>
                    </div>
                    <div class="col  l4 m4 s12">
                        <div class="switch center-align">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col  l4 m4 s12">
                        <div class="center-align">
                            <input type="checkbox" id="{{ $item.$loop->index }}" />
                            <label for="{{ $item.$loop->index }}"></label>
                        </div>
                    </div>
                 </div>
                @endif
            
             @if ($loop->last)
                <hr class="clear" /> 
             @endif   
             
        @endforeach
    </div>
</div>
                       