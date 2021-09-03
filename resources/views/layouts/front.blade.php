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
      <a class="navbar-brand text-success" href="/">栄養ラボ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
          
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">会員ページ</a>
            </li>
            <!-- ドロップダウンタイプ -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              　レシピを探す
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              　その他
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">会社概要</a>
                <a class="dropdown-item" href="#">Another action</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts/">お問い合わせ</a>
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
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-">
                <a href="#">トップに戻る</a>
            </p>
            <p class="mb-1">アルバムサンプルは &copy; Bootstrap ですが、ダウンロードしてカスタマイズしてみましょう。</p>
            <p class="mb-0">Bootstrap は初めてですか？ <a href="/">ホームページにアクセスする</a>か<a href="/docs/5.0/getting-started/introduction/">スタートガイド</a>を読みましょう。</p>
        </div>
    </footer>
</html>

