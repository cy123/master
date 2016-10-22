@extends('Home.base')

@section('scrollme')

    <section id="hero" class="scrollme">
        <div class="container-fluid element-img" style="background: url(https://oeo26ov4o.qnssl.com/index.jpg) no-repeat center center fixed;background-size: cover">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 vertical-align cover boost text-center">
                    <div class="center-me animateme" data-when="exit" data-from="0" data-to="0.6" data-opacity="0" data-translatey="100">
                        <div>

                            <h2></h2>
                            <p></p>

                            <h2></h2>
                            <p></p>


                        </div>
                    </div>
                </div>
                <!-- // .col-md-12 -->
            </div>
            <div class="herofade beige-dk"></div>
        </div>
    </section>
@endsection

@section('content')
<div class="heightblock"></div>
<section id="intro">
    <div class="container">
	     <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="row boxes">
                     @if(count($articles)>0)
                     @foreach($articles as $article)

                         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">

                             <h4 class="title"><a href="{{url('detail/'.$article->id)}}">{{$article->title}}</a></h4>

                             <p><time datetime="2016-05-10T08:01:05.000Z">{{$article->updated_at}}</time></p>
                         </div>
                     @endforeach
                     @else
                         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">

                             <h4 class="title">此标签下暂时还没有内容</h4>
                         </div>
                     @endif

                 </div>
             </div>

        </div>
    </div>
</section>         
@endsection