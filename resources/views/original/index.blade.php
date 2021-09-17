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
              <p class="text-break">保育園で作っているメニューを載せてます。
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
          <h2 class="featurette-heading text-center mt-3">カウンセリグ</h2>
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
          <img class="image" src="{{ asset('img/TOP/counseling.png') }}" class="bd-placeholder-img card-img-top" width="500" height="500">
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
        <h2 class="pb-4 mb-4 font-italic border-bottom text-success text-center">レシピ</h2>
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
      <h2 class="pb-4 mb-4 font-italic border-bottom text-primary text-center">ブログ</h2>
      <!--<hr class="featurette-divider">-->
    </div>
  </div>

  <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                                <div class="title p-2">
                                    <h1>{{ str_limit($headline->title, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ str_limit($headline->body, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ str_limit($post->title, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ str_limit($post->body, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
    
    <div class="text-center">
      <a class="btn btn-outline-secondary text-center" href="blog/blog" role="button">すべての記事をみる</a>
    </div>
    

@endsection
