@extends('layouts.front')
@section('title')
子どもから大人まで健康栄養
@endsection
@section('content')

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
         <div class="carousel-inner">
        　　　<div class="carousel-item active">
              　<img src="{{ asset('img/TOP/yasai.png') }}" class="d-block w-100" height="600" alt="...">
            </div>
            <div class="carousel-item">
              　<img src="{{ asset('img/TOP/soup.png') }}" class="d-block w-100" height="600" alt="...">
            </div>
            <div class="carousel-item">
              　<img src="{{ asset('img/TOP/chicken.png') }}" class="d-block w-100" height="600" alt="...">
            </div>
          </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  
    <div class="container mt-4">
    <div class="row">
       <h1 class="fw-bold text-success text-center">バランスの良い食事</h1>
       <p class="lead text-success text-center">大人から子供まですべての人に健康的な食生活を</p>
    </div>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
         <h2 class="featurette-heading text-center">管理栄養士の考えた食事で健康な毎日</h2>
         <div class="d-flex align-items-center justify-content-center" style="height:300px;">
        <p class="lead">毎日手軽に作れるメニュー</p>
        </div>
        </div>
      <div class="col-md-5">
         <img src="{{ asset('img/TOP2/salmon.png') }}" class="bd-placeholder-img card-img-top" width="500" height="500">
        <!--<text x="100%" y="50%" fill="#aaa" dy=".3em">500x500</text>z-->
        </svg>
      </div>
    </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading text-center">健康維持・ダイエット</h2>
           <div class="d-flex align-items-center justify-content-center" style="height:300px;">
          <p class="lead"></p>
        </div>
        </div>
        <div class="col-md-5 order-md-1">
         <img src="{{ asset('img/TOP2/salad.png') }}" class="bd-placeholder-img card-img-top" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading text-center">アレルギー指導</h2>
            <div class="d-flex align-items-center justify-content-center" style="height:300px;">
          <p class="lead">お子様が安心して食べれるアレルギー指導も行っています。</p>
        </div>
        </div>
        <div class="col-md-5">
            <img src="{{ asset('img/TOP2/bread.png') }}" class="bd-placeholder-img card-img-top" width="500" height="500">
        </div>
      </div>
      
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

    <div class="album py-5 bg-light">
      <div class="container">
          <h2 class= "py-4 text-success text-center">おすすめレシピ</h2>
           <hr class="featurette-divider">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <img src="{{ asset('img/soup/soup.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">野菜スープ</p>
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
                 <img src="{{ asset('img/oyatu/mameyaki.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">枝豆の焼き菓子</p>
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
                 <img src="{{ asset('img/fukusai/ohitasi.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">ほうれん草のおひたし</p>
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
               <img src="{{ asset('img/oyatu/cake.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">パンケーキ</p>
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
               <img src="{{ asset('img/oyatu/cookie.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">おからクッキー</p>
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
               <img src="{{ asset('img/oyatu/banana.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">バナナパンケーキ</p>
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
               <img src="{{ asset('img/syusai/syumai.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text">皮なしシュウマイ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                   <button type="button" class="btn btn-sm btn-outline-secondary">見る</button>
                </div>
                 <small class="text-muted">9分</small>
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
                  <button type="button" class="btn btn-sm btn-outline-secondary">見る</button>
                </div>
                <small class="text-muted">9分</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/fukusai/nasunohitasi.png') }}" class="bd-placeholder-img card-img-top" alt="..." width="100%" height="225">
                <p class="card-text">ナスのおひたし</p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">見る</button>
                </div>
                <small class="text-muted">9分</small>
                </div>
              </div>
            </div>
          </div>
    </dvi>
  </div> <!-- container -->
        
   <div class="album py-5 bg-light">
    <div class="container">
      <h2 class= "py-4 text-success text-center">レシピを探す</h2>
      <hr class="featurette-divider">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/syusyoku/okuraudon.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <a class="btn btn-outline-danger" href="" role="button">主食レシピ</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <img src="{{ asset('img/syusai/ankakesakana.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                <a class="btn btn-outline-warning" href="resipi/syusai" role="button">主菜レシピ</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/fukusai/hijiki.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <a class="btn btn-outline-success" href="" role="button">副菜レシピ</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/soup/cone.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                   <a class="btn btn-outline-info" href="" role="button">汁物レシピ</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/oyatu/banana.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                   <a class="btn btn-outline-primary" href="" role="button">おやつレシピ</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/TOP/gentei.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-outline-secondary" href="" role="button">会員限定レシピ</a>
                </div>
                </div>
              </div>
            </div>
          </div>

      </div>      
  </div> <!-- container -->
@endsection
