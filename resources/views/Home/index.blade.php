@extends('Home.base')
@section('categorys')
	<li><a href="categories/C-Cpp/index.html" class="animsition-link">C/Cpp<small>(2)</small></a></li>

	<li><a href="categories/CSS3/index.html" class="animsition-link">CSS3<small>(1)</small></a></li>
@endsection
@section('link')
   <li><a href="http://miibotree.com/" class="animsition-link">Miibotree</a></li>

   <li><a href="http://homeway.me/" class="animsition-link">小草</a></li>
@endsection

@section('scrollme')
<section id="hero" class="scrollme">
    <div class="container-fluid element-img" style="background: url(public/Home/img/1.jpeg) no-repeat center center fixed;background-size: cover">
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
            <div class="col-md-8 col-md-offset-2 opening-statement">
                <div class="col-md-4">
                    <h3><a href="post/37/index.html">一张 CD 的动画</a></h3>
                    <span>
                        <span class="post-meta">
						  <time datetime="2016-05-10T08:01:05.000Z" itemprop="datePublished">
							  2016-05-10
						  </time>|<a href='tags/CSS3/index.html'>CSS3</a>
    
    
						</span>
                    </span>
                </div>
                <div class="col-md-8">
                    <p>
                        两个 Div 实现的动画12&lt;div class="cd"&gt;&lt;/div&gt;&lt;div class="music"&gt;&lt;/div&gt;
						为什么要写这个呢？答案是 玩没错 就是玩…可能脑抽吧其实我发现 CSS 动画真的很好玩！可以实现一些炫酷的效果接下来我会继续写几个好玩的 Demo补充下我并不充实的 CSS3 动画知识…玩并快乐的学习~代码请戳下面http://codepen.io/_kieran/p
                    </p>
                    
                    <p class="pull-right readMore">
                        <a href="post/37/index.html">Read More...</a>
                    </p>
                    
                </div>
                <div class="clearfix"></div>
                <hr class="nogutter">
            </div>
        </div>
        <nav class="pagination" role="pagination">
          <a class="pull-right" href="page/2/index.html">Older Posts →</a>
        </nav>
    </div>
</section>        
        
@endsection
