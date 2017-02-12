 <div class="row" id="list">

                <section id="catOne">
                    {{-- @foreach($resultatOne in $resultat) --}}
                        <div class="row">
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
                                        <label v-bind:for="index + 2"></label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    {{-- @endforeach --}}
                </section>

         
</div>
                       