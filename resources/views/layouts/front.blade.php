<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
         {{-- 後の章で説明します --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="{{ secure_asset('js/test.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
        <link href="{{ asset('css/test.css') }}" rel="stylesheet">
        
        {{--bootstrap.social--}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        
        <!-- Bootstrap core CSS　ナビゲーションバーlite -->
    　　<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    　　　<!--　　<form class="d-flex form-inline my-2 my-lg-0">-->
        <!--    　<input class="form-control me-2 navbar-dark" type="search" placeholder="レシピさがす" aria-label="Search">-->
        <!--    　<button class="btn btn-outline-danger text-danger" type="submit">検索</button>-->
        <!--    </form>-->
        <!--  </div>-->
        <!--</nav>-->
        
        
        <!-- ナビゲーションバー -->    
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand text-success fw-bold" href="/">栄養LABO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
          
            <li class="nav-item">
              <a class="nav-link" href="/"><i class="bi bi-person-plus"></i>無料登録</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/"><i class="bi bi-bag-check"></i>会員ページ</a>
            </li>
            <!-- ドロップダウンタイプ -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-search">レシピを探す</i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">主食</a>
                <a class="dropdown-item" href="#">主菜</a>
                <a class="dropdown-item" href="#">副菜</a>
                <a class="dropdown-item" href="#">汁物</a>
                <a class="dropdown-item" href="#">おやつ</a>
              </div>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contacts/"><i class="bi bi-envelope"></i>お問い合わせ</a>
            </li>
          </ul>
        </div>
    </nav>
  　　　{{-- ここまでナビゲーションバー --}}
      <main class="py-0">
          {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
          @yield('content')
      </main>
  </div>
  
  
  
        {{--ロゴリンク先--}}
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
      
      <footer id="footer">
        <section class="primary">
          <p class="logo"><a href="#">栄養LABO</a></p>
          <p class="address">
            〒100-0005 東京都千代田区丸の内１丁目<br>
          </p>
          
          <div class="navi-row">
            <ul class="navi">
              <li><a href="#">ホーム</a></li>
              <li><a href="#">料金プラン</a></li>
              <li><a href="#">相談してよかったこと</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">会社概要</a></li>
            </ul>
            <ul class="sns-navi">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div>
          
          </section>
          <section class="secondary">
            <ul class="sitenavi">
              <li><a href="#">サイトマップ</a></li>
              <li><a href="#">プライバシーポリシー</a></li>
            </ul>
            <p class="copyright">Copyright WEBSITE,Inc. All rights reserved.</p>
        </section>
        
      </footer>
</html>

