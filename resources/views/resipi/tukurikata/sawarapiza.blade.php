@extends('layouts.front')
@section('title')
さわらのピザ風焼き
@endsection
@section('content')

  <body>
    <!-- Page Content -->
    <div class="container">
      <!-- Portfolio Item Heading -->
      <h1 class="my-5 mb-2">さわらのピザ風焼き
        <small></small>
      </h1>
     
      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="{{ asset('img/syusai/sawarapiza.png') }}" alt="画像">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">効果</h3>
          <p>疲労回復とDHA&EPAが摂れるのでおすすめです。<br>
            ビタミンB1で、疲労回復に期待！<br>
            さらにビタミンB6の効果で、動脈硬化を予防し、ストレスをやわらげる効果も！
          </p>
          <h3 class="my-3">材料（２人分）</h3>
          <ul>
            <li>さわら・・・１００g</li>
            <li>ケチャップ・・・大さじ１</li>
            <li>とろけるチーズ・・・２０グラム</li>
            <li>お好みでパセリ適量</li>
          </ul>
        </div>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">作り方</h3>

      <div class="row">
        <div class="col-md-4">
          <h4 class="my-3">1.さわの下処理</h4>
          <p>・沸騰したお湯に３秒間くぐらす。<br>
            ・その後、冷水につけ血などを洗う。
          </p>
          <h4 class="my-3">2.ケッチャプとチーズをのせて、オーブンで焼く</h4>
          <p>１０分くらい焼いて、焼き目がついたら完成。</p>
        </div>
      </div>
      <!-- /.row -->
      
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
    
@endsection
