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
      
      
      <div class="container py-2">
    <div class="row min-vh- align-items-center">
        <div class="col-lg-8 offset-lg-2" id="slider">
            <div id="myCarousel" class="carousel slide shadow">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    <div class="active carousel-item" data-slide-number="0">
                        <img src="{{ asset('img/syusai/sawarapiza.png') }}"  class="d-block w-100" height="250" alt="...">
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
        <p class="text-break">毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー毎日手軽に作れるメニュー</p>
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
                 <img src="{{ asset('img/desert/mameyaki.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
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
               <img src="{{ asset('img/desert/cake.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
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
               <img src="{{ asset('img/desert/cookie.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
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
               <img src="{{ asset('img/desert/banana.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
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
        <h1 class="pb-4 mb-4 font-italic border-bottom text-success text-center">Recipe</h1>
      <!--<h2 class= "py-4 text-success text-center">レシピを探す</h2>-->
      <hr class="featurette-divider">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                 <img src="{{ asset('img/meinn/okuraudon.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <a class="btn btn-outline-danger" href="resipi/meinn" role="button">主食レシピ</a>
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
                   <a class="btn btn-outline-success" href="resipi/fukusai" role="button">副菜レシピ</a>
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
                   <a class="btn btn-outline-info" href="resipi/soup" role="button">汁物レシピ</a>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
               <img src="{{ asset('img/desert/banana.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                   <a class="btn btn-outline-primary" href="resipi/desert" role="button">おやつレシピ</a>
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
  
 <div class="mt-5">
  <div class="alert alert-primary" pb-4 mb-4 font-italic role="alert">
   <h2>Blog</h2> 
  </div>
</div>

  <main class="container">

  <div class="row mb-2">
    
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">健康</strong>
          <h4 class="mb-0">平均寿命と健康寿命の違いにつて</h4>
          <div class="mb-1 text-muted">11/12</div>
          <p class="card-text mb-auto">平均寿命と健康寿命との差は、日常生活に制限のある「不健康な期間」を意味します。</p>
          <a href="#" class="stretched-link">続きを読む</a>
        </div>
        
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">野菜</strong>
          <h4 class="mb-0">野菜の栄養を上手に摂る方法</h4>
          <div class="mb-1 text-muted">11/11</div>
          <p class="mb-auto">水洗いをすると栄養が抜け、大切な栄養素が水に溶けてしまう。</p>
          <a href="#" class="stretched-link">続きを読む</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">古い記事</a>
        <a class="btn btn-outline-secondary disabled" href="#">新しい記事</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">ブログについて</h4>
        <p class="mb-0">健康の知識を投稿してます。<em>野菜の栄養や保存方法など、</em>幅広い知識が身に付くブログになってます。</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">アーカイブ</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">2014/03</a></li>
          <li><a href="#">2014/02</a></li>
          <li><a href="#">2014/01</a></li>
          <li><a href="#">2013/12</a></li>
          <li><a href="#">2013/11</a></li>
          <li><a href="#">2013/10</a></li>
          <li><a href="#">2013/09</a></li>
          <li><a href="#">2013/08</a></li>
          <li><a href="#">2013/07</a></li>
          <li><a href="#">2013/06</a></li>
          <li><a href="#">2013/05</a></li>
          <li><a href="#">2013/04</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">SNS</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </div>

  </div><!-- /.row -->

</main><!-- /.container -->

@endsection
