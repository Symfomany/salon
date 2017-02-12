<div class="row item animated fadeIn">
        <div class="col s12 l6 m6">
            <p class="truncate intitule">{{ $resultat['intitule'] }}</p>
        </div>

       <div class="col s12 l6 m6">
        @foreach($resultat as $item)
            @if(!empty($item) && $loop->index != 0)
                <div class="row feature">
                    <div class="col l4 m4 s12">
                        <p class="marque">{{ $item }}</p>
                    </div>
                    <div class="col  l4 m4 s12">


                        <div class="switch">
                            <label>
                            Off
                                <input name="accords[{{ $item }}]" value="subscribed" id="{{ $item }}" type="checkbox" class="discover">
                             <span class="lever"></span>
                            On
                            </label>
                        </div>
                        

                        <div class="switch center-align hide-on-small-only">
                            <label>
                                <input name="accords[{{ $item }}]" value="subscribed" id="{{ $item }}" type="checkbox" class="discover">
                                <span class="lever"></span>
                            </label>
                        </div>



                    </div>
                    <div class="col  l4 m4 s12">
                        <div class="center-align">
                            <input name="accords[{{ $item }}]" value="member" class="already" value="ok" type="checkbox" id="{{ $item.$loop->index }}" />
                            <label for="{{ $item.$loop->index }}"></label>
                        </div>
                    </div>
                 </div>
                @endif
        @endforeach
    </div>
</div>

                       