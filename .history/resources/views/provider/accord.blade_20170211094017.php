 <div class="row" id="list">

                <section id="catOne">
                    @foreach($resultat in  $resultatOne->all())
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
                    @endforeach
                </section>

                {{-- <section id="catTwo" class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Assurances de personnes, Mutuelles, Prévoyance</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                
                <section id="catThree"  class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Location de Matériels</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2"></label>
                                </div>
                        <div class="row" id="list">
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
                </section>

                <section id="catFour"  class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Réparation et remplacement vitrage véhicules</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                
                <section id="catFive"  class="hide">
                    <div class="row" v-for="(item, index) in 10">
                        <div class="col s12 l12">
                            <p class="truncate">Location et Entretien de Vêtements de travail</p>
                        </div>
                    
                        <div class="row"> 
                            <div class="col l2">
                                <p>Inter-Hotel</p>
                            </div>
                            <div class="col l2">
                                <div class="switch margin">
                                    <label>
                                    
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col l2">
                                <div class="margin">
                                    <input type="checkbox" v-bind:id="index + 2" />
                                    <label v-bind:for="index + 2"></label>
                                </div>
                            </div>
                        </div>

                    </div>
                </section> --}}
</div>
                       