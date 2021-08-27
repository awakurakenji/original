@extends('layouts.front')
@section('title')
主食レシピ
@endsection
@section('content')

　<div class="text-center">
  　<img src="{{ asset('img/meinn/ebipirafu.png') }}" class="rounded" height="500" width="70%" alt="...">
　</div>

    <div class="album py-5 bg-light">
    <div class="container">
        <h1 class= "py-4 text-danger text-center font-weight-bold">主食レシピ</h1>
        <hr class="featurette-divider">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
      　                 <img src="{{ asset('img/meinn/okuraudon.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <p class="card-text">オクラうどん</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                        </div>
                          <small class="text-muted">9分</small>
                      </div>
                    </div>
                </div>
            </div>
              
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="{{ asset('img/meinn/curry.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                         <p class="card-text">チキンカレー</p>
                        <div class="d-flex justify-content-between align-items-center">
                         <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                         </div>
                          <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                         <img src="{{ asset('img/meinn/ketchup＿rice.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                         <p class="card-text">ケチャップライス</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                        </div>
                          <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
             </div>
              
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="{{ asset('img/meinn/cone_curry.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <p class="card-text">コーンカレー</p>
                        <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                        </div>
                          <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
            </div>
              
              
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <img src="{{ asset('img/meinn/ebipirafu.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                        <p class="card-text">エビピラフ</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                             <a class="btn btn-outline-danger" href="/" role="button">作り方</a>
                            </div>
                            <small class="text-muted">9分</small>
                        </div>
                    </div>
                </div>
            </div>
              
              <!--<div class="col">-->
              <!--  <div class="card shadow-sm">-->
              <!--    <div class="card-body">-->
              <!--       <img src="{{ asset('img/meinn/.png') }}" class="bd-placeholder-img card-img-top" width="100%" height="225">-->
              <!--      <p class="card-text"></p>-->
              <!--      <div class="d-flex justify-content-between align-items-center">-->
              <!--        <div class="btn-group">-->
              <!--        <button type="button" class="btn btn-sm btn-outline-secondary">作り方</button>-->
              <!--        </div>-->
              <!--        <small class="text-muted">9分</small>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
          
        </div>
    </dvi>
    </div> <!-- container -->

@endsection
