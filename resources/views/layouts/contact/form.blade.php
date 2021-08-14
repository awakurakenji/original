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
        
        
                <div class="container"</div>
                <br>
                <h1>お問い合わせ</h1>
                <br>
                <div class="border col-7">
                    <br>
                    <h2>お問い合わせ</h2>
                    <br>
                    <div class="row">
                        <div class="col-md">
                            <form>
                                <div class="form-group">
                                    <label>氏名</label>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>メールアドレス</label>
                                    <input type="text" class="form-control" placeholder="you@example.com">
                                </div>
                                  <div class="form-group">
                                    <label>お問い合わせ内容</label>
                                    <select class="form-control">
                                        <option>サービスについてのお問い合わせ</option>
                                        <option>その他お問い合わせ</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>説明</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row center-block text-center">
                        <div class="col-1">
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-outline-secondary btn-block">閉じる</button>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-outline-primary btn-block">送信</button>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                </div>
                
   　　　   　 <main class="py-0">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
        </div>
    </body>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-">
                <a href="/">ホーム</a>
            </p>
        </div>
    </footer>
</html>