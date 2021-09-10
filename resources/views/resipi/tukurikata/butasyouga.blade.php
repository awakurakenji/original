@extends('layouts.front')
@section('title')
豚の生姜焼き
@endsection
@section('content')

  <body>
    <!-- Page Content -->
    <div class="container">
      <!-- Portfolio Item Heading -->
      <h1 class="my-5 mb-2">豚の生姜焼き
        <small></small>
      </h1>
     
      <!-- Portfolio Item Row -->
      <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="{{ asset('img/syusai/butasyouga.png') }}" alt="画像">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">効果</h3>
          <p>疲労回復効果、冷え性対策に</p>
          <h3 class="my-3">材料（２人分）</h3>
          <ul>
            <li>豚肉・・・２００g</li>
            <li>玉ねぎ・・・１/２個（約１００g）</li>
            <li>（生姜焼きのタレ）</li>
            <P>しょうがすりおろし・・・２０グラム<br>
            しょうゆ、酒、みりん・・・各大さじ１</P>
            <li>お好みでキャベツ適量</li>
          </ul>
        </div>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">作り方</h3>

      <div class="row">
        <div class="col-md-4">
          <h4 class="my-3">1.肉と玉ねぎを焼く</h4>
          <p>水分がなくらないように弱火でじっくり焼く。<dr>
            （※タレも最初から加えておく）
          </p>
          <h4 class="my-3">2.タレを加える</h4>
          <p>お肉が硬くならないように中火で炒める。</p>
           <h4 class="my-3">3.タレをからめる</h4>
           <p>タレがからむまで弱火で煮詰める。</p>
        </div>
      </div>
      <!-- /.row -->
      
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
    
@endsection
