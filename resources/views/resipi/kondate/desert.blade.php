@extends('layouts.front')
@section('title')
おやつレシピ
@endsection
@section('content')

<div class="container py-2">
    <div class="row min-vh- align-items-center">
        <div class="col-lg-8 offset-lg-2" id="slider">
            <div id="myCarousel" class="carousel slide shadow">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    <div class="active carousel-item" data-slide-number="0">
                        <img src="{{ asset('img/syusai/sawarapiza.png') }}"  class="d-block w-100" height="600" alt="...">
                    </div>
                    <div class="carousel-item" data-slide-number="1">
                        <img src="http://via.placeholder.com/1200x480/888/FFF" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="2">
                        <img src="http://via.placeholder.com/1200x480&amp;text=three" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="3">
                        <img src="http://via.placeholder.com/1200x480&amp;text=four" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="4">
                        <img src="http://via.placeholder.com/1200x480&amp;text=five" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="5">
                        <img src="http://via.placeholder.com/1200x480&amp;text=six" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="6">
                        <img src="http://via.placeholder.com/1200x480&amp;text=seven" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="7">
                        <img src="http://via.placeholder.com/1200x480&amp;text=eight" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="8">
                        <img src="http://via.placeholder.com/1200x480&amp;text=seven" class="img-fluid">
                    </div>
                    <div class="carousel-item" data-slide-number="9">
                        <img src="http://via.placeholder.com/1200x480&amp;text=eight" class="img-fluid">
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
            </div>
        </div>
    </div>
    <!--/main slider carousel-->
</div>

    
     <div class="album py-5 bg-light">
      <div class="container">
          <h2 class= "py-4 text-primary text-center font-weight-bold">おやつレシピ</h2>
           <hr class="featurette-divider">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/syusai/sawarapiza.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">さわらのピザ風チーズ</p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <button type="button" class="btn btn-sm btn-outline-secondary">見る</button>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/syusai/butasyouga.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                  <p class="card-text">豚の生姜焼き</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-outline-warning" href="/butasyouga" role="button">作り方</a>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/syusai/ankakesakana.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">魚のあんかけソース</p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                      <a class="btn btn-outline-warning" href="/butasyouga" role="button">作り方</a>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/syusai/hapousai.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">野菜たっぷり八宝菜</p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                      <a class="btn btn-outline-warning" href="/butasyouga" role="button">作り方</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/syusai/toriniku-jam.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">鶏肉のマーマレード焼き</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a class="btn btn-outline-warning" href="/butasyouga" role="button">作り方</a>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/syusai/syumai.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">皮なしシュウマイ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <a class="btn btn-outline-warning" href="/butasyouga" role="button">作り方</a>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/syusai/saba.png') }}" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="225">
                  <p class="card-text">さばのごま焼き</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-outline-warning" href="/butasyouga" role="button">作り方</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/syusai/syakemiso.png') }}" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="225">
                  <p class="card-text">シャケの西京焼き</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a class="btn btn-outline-warning" href="/butasyouga" role="button">作り方</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
         
       </div>
    </dvi>
  </div> <!-- container -->
    
    
@endsection
