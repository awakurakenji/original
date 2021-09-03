@extends('layouts.front')
@section('title')
主食レシピ
@endsection
@section('content')

<div class="container py-2">
      <div class="row align-items-center">
          <div class="col-lg-8 offset-lg-2" id="slider">
              <div id="myCarousel" class="carousel slide shadow">
                  <!--<a!-- main slider carousel items -->
                  <div class="carousel-inner">
                      <div class="active carousel-item" data-slide-number="0">
                          <img src="{{ asset('img/meinn/cone_curry.png') }}" class="img-fluid">
                      </div>
                      <div class="carousel-item" data-slide-number="1">
                          <img src="{{ asset('img/meinn/curry.png') }}" class="img-fluid">
                      </div>
                      <div class="carousel-item" data-slide-number="2">
                          <img src="{{ asset('img/meinn/ebipirafu.png') }}" class="img-fluid">
                      </div>
                      <div class="carousel-item" data-slide-number="3">
                          <img src="{{ asset('img/meinn/ketchup_rice.png') }}" class="img-fluid">
                      </div>
                      <div class="carousel-item" data-slide-number="4">
                          <img src="{{ asset('img/meinn/okuraudon.png') }}" class="img-fluid">
                      </div>
                      <div class="carousel-item" data-slide-number="5">
                          <img src="{{ asset('img/meinn/okuraudon.png') }}" class="img-fluid">
                      </div>
                      
                      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
                  <!-- main slider carousel nav controls -->
                  
                  <ul class="carousel-indicators list-inline mx-auto border px-2">
                      <li class="list-inline-item active">
                          <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                              <img src="{{ asset('img/meinn/cone_curry.png') }}" class="img-fluid">
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                              <img src="{{ asset('img/meinn/curry.png') }}" class="img-fluid">
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                              <img src="{{ asset('img/meinn/ebipirafu.png') }}" class="img-fluid">
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                              <img src="{{ asset('img/meinn/ketchup_rice.png') }}" class="img-fluid">
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                              <img src="{{ asset('img/meinn/okuraudon.png') }}" class="img-fluid">
                          </a>
                      </li>
                      <li class="list-inline-item">
                          <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                              <img src="{{ asset('img/meinn/okuraudon.png') }}" class="img-fluid">
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
          
      </div>
      <!--/main slider carousel-->
  </div>
  
    <div class="album py-5 bg-light">
    <div class="container">
        <h1 class= "py-4 text-danger text-center font-weight-bold">主食レシピ</h1>
        <hr class="featurette-divider">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
          
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                      <img src="{{ asset('img/meinn/okuraudon.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <p class="card-text">オクラうどん</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                        </div>
                          <small class="text-muted">9分</small>
                      </div>
                    </div>
                </div>
            </div>
              
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                      <img src="{{ asset('img/meinn/curry.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                         <p class="card-text">チキンカレー</p>
                        <div class="d-flex justify-content-between align-items-center">
                         <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                         </div>
                          <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                      <img src="{{ asset('img/meinn/ketchup_rice.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                         <p class="card-text">ケチャップライス</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                        </div>
                          <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
             </div>
              
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                      <img src="{{ asset('img/meinn/cone_curry.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <p class="card-text">コーンカレー</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                        </div>
                          <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
            </div>
              
              
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                      <img src="{{ asset('img/meinn/ebipirafu.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <p class="card-text">エビピラフ</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                             <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                            </div>
                            <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </dvi>
  </div> <!-- container -->

@endsection
