@extends('layouts.front')
@section('title')
おやつレシピ
@endsection
@section('content')

    <div class="text-center">
     <img src="{{ asset('img/desert/cake.png') }}" class="rounded" height="500" width="70%" alt="...">
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
