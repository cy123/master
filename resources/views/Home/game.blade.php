
@extends('Home.base')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('public/Home/game/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/Home/game/css/style.css')}}">
@endsection

@section('link')
   <li><a href="http://miibotree.com/" class="animsition-link">Miibotree</a></li>
   <li><a href="http://homeway.me/" class="animsition-link">小草</a></li>
@endsection

@section('content')
<section id="intro">
    <div class="container">
	     <div class="row">
            <div class="col-md-8 col-md-offset-2 opening-statement">
                <canvas id="chess" width="450px" height="450px" ></canvas>
                <div style="float:right;margin-right:150px;"><button class="btn btn-default" id="restart">从新开始</button></div>
                <div class="clearfix"></div>
                <hr class="nogutter">
            </div>
        </div>
    </div>
</section>         
@endsection

@section('js')
 <script type="text/javascript" src="{{asset('public/Home/game/js/script.js')}}"></script>
@endsection






