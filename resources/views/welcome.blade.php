@extends('layouts.app')
@section ('content')
      

                <div id="featured" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      
                      <?php
                      $i = 0;
                      ?>
                      @foreach($news as $news )
                      
                      @if($i==0)
                      <li data-target="#featured" data-slide-to="0" class="active"></li>


                      @else
                      <li data-target="#featured" data-slide-to="0"></li>

                      @endif
                      
                      
                      <?php
                      $i++;
                      ?>
                      @endforeach   
                      
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    
                        <?php
                        $i2 = 0;
                        ?>
                    @foreach($news as $news ) 
                    @if($i2==0)
                      <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/185649/background.png" alt="First slide">
                        <div class="carousel-caption d-none d-block d-flex align-items-center" style="height: 100%">
                          <div>
                            <img class="img-fluid laptop" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/185649/lcd.png" alt="laptop"/>
                          </div>
                          <div>
                            <h3 class="product-caption-title">get the best version</h3>
                            <p class="product-caption-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam alias porro vitae quos repudiandae repellat iure explicabo, omnis modi excepturi odio eos natus, quae quia.</p>
                            <button class="product-caption-button">get it now</button>
                          </div>
                        </div>
                      </div>

                      @else

                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/185649/background.png" alt="First slide">
                          <div class="carousel-caption d-none d-block d-flex align-items-center" style="height: 100%">
                            <div>
                              <img class="img-fluid laptop" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/185649/lcd.png" alt="laptop"/>
                            </div>
                            <div>
                              <h3 class="product-caption-title">get the best version</h3>
                              <p class="product-caption-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam alias porro vitae quos repudiandae repellat iure explicabo, omnis modi excepturi odio eos natus, quae quia.</p>
                              <button class="product-caption-button">get it now</button>
                            </div>
                          </div>
                        </div>

                      @endif

                       
                      <?php
                      $i2++;
                      ?>
                        @endforeach   
                        


                      <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

         
                      
                      
                      <div class="container-fluid parallax">
                    </div>

                    





                   




                          <div class="row">
                                <button type="button" class="btn purple-bg btn-lg btn-block">Read more news</button>
                                </div>




                                <div class="container-fluid parallax">
                                </div>





                        
                                <div class="container text-center my-3 sponsorsPride" style="height:30vh">
                                        <div class="row mx-auto my-auto">
                                            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                                                <div class="carousel-inner w-100" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=1">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=2">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=3">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=4">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=5">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=6">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>




                            




                      
    </main>
  

    @endsection 