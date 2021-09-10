@extends('layouts.front')
@section('title')
子どもから大人まで健康栄養
@endsection
@section('content')

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      　<img src="{{ asset('img/TOP/yasai.png') }}" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="600" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/TOP/soup.png') }}" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="600" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/TOP/yasai.png') }}" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" height="600" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      {{--slider--}}
      <div class="container text-center my-3">
    <!--<h3>Bootstrap 4 Multiple Item Carousel</h3>-->
    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
                <div class="col-3 float-left"><img class="img-fluid rounded" src="{{ asset('img/meinn/ketchup_rice.png') }}"></div>
                <div class="col-3 float-left"><img class="img-fluid rounded" src="{{ asset('img/syusai/ankakesakana.png') }}"></div>
                <div class="col-3 float-left"><img class="img-fluid rounded" src="{{ asset('img/fukusai/broccoli.png') }}"></div>
                <div class="col-3 float-left"><img class="img-fluid rounded" src="{{ asset('img/soup/stew.png') }}"></div>
            </div>
            <div class="carousel-item row no-gutters">
                <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('img/meinn/okuraudon.png') }}"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('img/syusai/hapousai.png') }}"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('img/fukusai/sira.png') }}"></div>
                <div class="col-3 float-left"><img class="img-fluid" src="{{ asset('img/soup/cone.png') }}"></div>
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
    <!--<h4>Advances all 4 slides each time</h4>-->
</div>


    <div class="container mt-4">
    <div class="row">
       <h1 class="fw-bold text-success text-center">バランスの良い食事</h1>
       <p class="lead text-success text-center">-大人から子供まですべての人に健康的な食生活を-</p>
    </div>
    
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading text-center mt-3">食事と健康をサポートします</h2>
          <div class="d-flex align-items-center justify-content-center" style="height:200px;">
            <ul>
              <h5 class="text-break md-3">-こんなお悩みはありませんか？-</h5>
              <li>疲れやすく体がだるく感じる</li>
              <li>なかなか寝れなくてなど、睡眠で悩んでいる</li>
              <li>健康診断の内容が気になり始めた</li>
              <li>食事内容を考える時間がない</li>
              <li>自分に合った食事内容がわからない</li>
            </ul>
          </div>
      </div>
        <div class="col-md-5">
          <img class="image" src="{{ asset('img/TOP2/salmon.png') }}" class="bd-placeholder-img card-img-top" width="500" height="500">
        </div>
    </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading text-center mt-3">管理栄養士の考えたメニュー</h2>
            <div class="d-flex align-items-center justify-content-center" style="height:200px;">
              <p class="text-break">実際に病院や保育園でも作っているメニューなどを載せてます。
              シンプルで作りやすい料理なので、お子様から大人まで手軽に健康な食事が摂れるようにしています。
              </p>
            </div>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="image" src="{{ asset('img/TOP2/salad.png') }}" class="bd-placeholder-img card-img-top" width="500" height="500">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading text-center mt-3">個別相談</h2>
            <div class="d-flex align-items-center justify-content-center" style="height:200px;">
              <ul>
                <h5 class="text-break mb-3">-お客様のお悩みに合わせたご提案をします-</h5>
                <li>アレルギーに悩んでる</li>
                <li>ダイエットが続かない</li>
                <li>肌荒れに悩んでる</li>
                <li>将来の病気のリスクを下げたい</li>
                <li>食事内容を改善したい</li>
              </ul>
          </div>
        </div>
        <div class="col-md-5">
          <img class="image" src="{{ asset('img/TOP2/bread.png') }}" class="bd-placeholder-img card-img-top" width="500" height="500">
        </div>
      </div>
      
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
    
    
  <div class="container">
    <div class="row">
      <div class="blog-main">
        <h2 class="pb-3 mb-4 fw-bold border-bottom text-success text-center">
        -カウンセリングまでの流れ-
        </h2>
      <div class="blog-post">
        <h3 class="mb-4 blog-post-title"><span>01</span>予約ボタンで簡単予約</h3>
          <p>予約ボタンをクリックすると予約ページにいきます。コースの選択をしてください。</p>
        <h3 class="mb-4 blog-post-title"><span>02</span>予約日時を選択</h3>
          <p>予約日時を選択してメールアドレスを記入。お支払い画面になります</p>
        <h3 class="mb-4 blog-post-title"><span>03</span>問診票を記入</h3>
          <p>簡単な問診票の記入をお願いするメールが届きます。</p>
        <h3 class="mb-4 blog-post-title"><span>04</span>ZOOMにてカウンセリング開始</h3>
          <p>前持ってZOOMアプリをインストールしておいてお待ち下さい。ご予約のお時間にカウンセリング可能なリング先URLをメールが届きます。</p>
      </div>
    </div><!-- /.blog-post -->

    <div class="album py-5 bg-light">
      <div class="container">
        
          <h2 class= "py-4 text-success text-center">人気レシピ</h2>
           <hr class="featurette-divider">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">





          <div class="col">
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/soup/soup.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/desert/mameyaki.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/fukusai/hijiki.png') }}" class=" bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
                <p class="card-text">ひじき</p>
                <div class="d-flex justify-content-between align-items-center">
                   <div class="btn-group">
                   <button type="button" class="btn btn-sm btn-outline-secondary">見る</button>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/desert/cake.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/desert/cookie.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/desert/banana.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/syusai/syumai.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/syusai/saba.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
            <div class="card shadow-sm border-warning">
              <div class="card-body">
                <figure class="hover-zoom"><img src="{{ asset('img/fukusai/nasunohitasi.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
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
        <h2 class="pb-4 mb-4 font-italic border-bottom text-success text-center">Recipe</h2>
      <!--<h2 class= "py-4 text-success text-center">レシピを探す</h2>-->
      <hr class="featurette-divider">
     <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <a href="resipi/meinn">
                <figure class="hover-zoom"><img src="{{ asset('img/meinn/okuraudon.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
                </a>
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
                <a href="resipi/syusai">
                <figure class="hover-zoom"><img src="{{ asset('img/syusai/ankakesakana.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
                </a>
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
                <a href="resipi/fukusai">
                <figure class="hover-zoom"><img src="{{ asset('img/fukusai/hijiki.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
                </a>
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
                <a href="resipi/soup">
                <figure class="hover-zoom"><img src="{{ asset('img/soup/cone.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
                </a>
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
                <a href="resipi/desert">
                <figure class="hover-zoom"><img src="{{ asset('img/desert/banana.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
                </a>
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
                <a href="">
                <figure class="hover-zoom"><img src="{{ asset('img/TOP/gentei.png') }}" class="bd-placeholder-img card-img-top zoom" width="100%" height="225"></figure>
                </a>
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
  <div class="container">
      <h2 class="pb-4 mb-4 font-italic border-bottom text-primary text-center">Blog</h2>
      <hr class="featurette-divider">
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
  
  </main><!-- /.container -->

@endsection
