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
        <!--bodyカラーbg-lightに指定-->
        <body class="bg-light">
        <div id="app">
            
        <nav class="navbar navbar-expand-lg navbar-light bg-width">
          <a class="navbar-brand text-success" href="#">栄養</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">ホーム<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">メニュー</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">会員ページ</a>
              </li>
            　<li class="nav-item active">
                <a class="nav-link" href="#">お問い合わせ</a>
              </li>
            </ul>
    　　　　　　<form class="d-flex form-inline my-2 my-lg-0">
            　<input class="form-control me-2 navbar-dark" type="search" placeholder="レシピさがす" aria-label="Search">
            　<button class="btn btn-outline-danger text-danger" type="submit">検索</button>
            </form>
          </div>
        </nav>
            {{-- ここまでナビゲーションバー --}}
            <main class="py-0">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
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