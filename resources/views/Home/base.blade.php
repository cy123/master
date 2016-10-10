
<!DOCTYPE html>
<!--[if lte IE 8 ]>
<html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--
***************  *      *     *
      8          *    *       *
      8          *  *         *
      8          **           *
      8          *  *         *
      8          *    *       *
      8          *      *     *
      8          *        *   ***********    -----Theme By Kieran(http://go.kieran.top)
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<!--<![endif]-->

<head>
  <title>catteacher</title>
  <!-- Meta data -->
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="KIERAN'S BLOG">
    <meta name="author" content="Kieran">
    <meta name="description" content="Always Creative." /> 
    <meta name="keywords" content="Kieran,BLOG" />

    <!-- Favicon, (keep icon in root folder) -->
    <link rel="Shortcut Icon" href="/public/Home/favicon.ico" type="image/ico">

    <link rel="alternate" href="/atom.xml" title="KIERAN&#39;S BLOG" type="application/atom+xml">
    <link rel="stylesheet" href="/public/Home/css/all.css" media="screen" type="text/css">
    
    <link rel="stylesheet" href="/public/Home/highlightjs/xcode.css" type="text/css">
    @yield('css')
    

    <!-- Custom stylesheet, (add custom styles here, always load last) -->
    <!-- Load our stylesheet for IE8 -->
    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="/css/ie8.css" />
    <![endif]-->

    <!-- Google Webfonts (Monserrat 400/700, Open Sans 400/600) -->
    <!-- <link href='//fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='//fonts.useso.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'> -->

    <!-- Load our fonts individually if IE8+, to avoid faux bold & italic rendering -->
    <!--[if IE]>
    <link href='http://fonts.useso.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <![endif]-->

    <!-- jQuery | Load our jQuery, with an alternative source fallback to a local version if request is unavailable -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script>

    <!-- Load these in the <head> for quicker IE8+ load times -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/Home/js/html5shiv.min.js"></script>
    <script src="/public/Home/js/respond.min.js"></script>
    <![endif]-->
  
  <!--<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="atom.xml">-->
    
  <style>.col-md-8.col-md-offset-2.opening-statement img{display:none;}</style>
</head>

<!--
<body class="home-template">
-->
<body id="index" class="lightnav animsition">

      <!-- ============================ Off-canvas navigation =========================== -->

    <div class="sb-slidebar sb-right sb-style-overlay sb-momentum-scrolling">
        <div class="sb-close" aria-label="Close Menu" aria-hidden="true">
            <img src="/public/Home/img/close.png" alt="Close"/>
        </div>
        <!-- Lists in Slidebars -->
        <ul class="sb-menu">
            <li><a href="{{url('index.html')}}" class="animsition-link" title="Home">Home</a></li>
            
            <li>
                <a class="sb-toggle-submenu">Tags<span class="sb-caret"></span></a>
            	<ul class="sb-submenu">

                        @foreach($tags as $key => $tag)
                            <li><a href="{{url('achives/'.$tag['id'])}}" class="animsition-link">{{$key}}<small>({{$tag['row']}})</small></a></li>
                        @endforeach

				</ul>
            </li>
            <!-- Dropdown Menu -->
			         
        	<li>
        		<a class="sb-toggle-submenu">Category<span class="sb-caret"></span></a>
            	<ul class="sb-submenu">
                    @foreach($categories as $category)
				        <li><a href="{{url('categories/'.$category->id)}}" class="animsition-link">{{$category->newHtml}}</a></li>
                    @endforeach
				</ul>
        	</li>
            <li>
                <a class="sb-toggle-submenu">Links<span class="sb-caret"></span></a>
                <ul class="sb-submenu">
                    <!--link-->
                    <li><a href="http://moell.cn/" class="animsition-link">Moell</a></li>
                    <li><a href="http://miibotree.com/" class="animsition-link">Miibotree</a></li>
      
                </ul>
            </li>
            
        </ul>
        <!-- Lists in Slidebars -->
        <ul class="sb-menu secondary">
            <li><a href="{{url('game.html')}}" class="animsition-link" title="resume">Game</a></li>
            <li><a href="{{url('resume.html')}}" class="animsition-link" title="resume">Resume</a></li>
            <li><a href="{{url('about.html')}}" class="animsition-link" title="about">About</a></li>
            
        </ul>
    </div>
    
    <!-- ============================ END Off-canvas navigation =========================== -->

    <!-- ============================ #sb-site Main Page Wrapper =========================== -->

    <div id="sb-site">
        <!-- #sb-site - All page content should be contained within this id, except the off-canvas navigation itself -->

        <!-- ============================ Header & Logo bar =========================== -->

        <div id="navigation" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- Nav logo -->
                    <div class="logo">
                        <a href="{{url('index.html')}}" title="Logo" class="animsition-link">
                         <img src="/public/Home/img/logo.png" alt="Logo" width="35px;"/> 
                        </a>
                    </div>
                    <!-- // Nav logo -->
                    <!-- Info-bar -->
                    <nav>
                        <ul class="nav">
                            <li><a href="{{url('index.html')}}" class="animsition-link">catteacher</a></li>
                            <li class="nolink"><span>Always </span>Creative.</li>
                            
                            <li><a href="https://github.com/cy123/master" title="Github" target="_blank"><i class="icon-github"></i></a></li>
            
                            <li><a href="#" title="catnosleep-Weibo" target="_blank"><i class="icon-sina-weibo"></i></a></li>
                            
                            <li class="nolink"><span>Welcome!</span></li>
                        </ul>
                    </nav>
                    <!--// Info-bar -->
                </div>
                <!-- // .container -->
                <div class="learnmore sb-toggle-right">More</div>
                <button type="button" class="navbar-toggle menu-icon sb-toggle-right" title="More">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar before"></span>
                <span class="icon-bar main"></span>
                <span class="icon-bar after"></span>
                </button>
            </div>
            <!-- // .navbar-inner -->
        </div>

        <!-- ============================ Header & Logo bar =========================== -->


      <!-- ============================ Hero Image =========================== -->
@yield('scrollme')


<!-- Height spacing helper -->

<!-- // End height spacing helper -->

<!-- ============================ END Hero Image =========================== -->

<!-- ============================ Content =========================== -->
@yield('content') 

<section id="statement">
    <div class="container text-center wow fadeInUp" data-wow-delay="0.5s">
        <div class="row">
            <p>每一个不曾起舞的日子都是对生命的辜负。</p>
        </div>
    </div>
</section>
<!-- ============================ END Content =========================== -->

      
<!-- ============================ Footer =========================== -->

<footer>
    <div class="container">
            <div class="copy">
                <p>
                    &copy; 2014<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script>, Content By Kieran. All Rights Reserved.
                </p>
                <p>Theme By <a href="//go.kieran.top" style="color: #767D84">Kieran</a></p>
            </div>
            <div class="social">
                <ul>
                    
                    <li><a href="https://github.com/cy123/master" title="Github" target="_blank"><i class="icon-github"></i></a>&nbsp;</li>
                    

                    
                    <li><a href="#" title="Sina-Weibo" target="_blank"><i class="icon-sina-weibo"></i></a>&nbsp;</li>
                    
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
</footer>

<!-- ============================ END Footer =========================== -->
      <!-- Load our scripts -->
        
<!-- Resizable 'on-demand' full-height hero -->
<script type="text/javascript">
    
    var resizeHero = function () {
        var hero = $(".cover,.heightblock"),
            window1 = $(window);
        hero.css({
            "height": window1.height()
        });
    };
    
    resizeHero();
    
    $(window).resize(function () {
        resizeHero();
    });
</script>
<script src="/public/Home/js/plugins.min.js"></script><!-- Bootstrap core and concatenated plugins always load here -->
<script src="/public/Home/js/jquery.flexslider-min.js"></script><!-- Flexslider plugin -->
<script src="/public/Home/js/scripts.js"></script><!-- Theme scripts -->


<link rel="stylesheet" href="/public/Home/fancybox/jquery.fancybox.css" media="screen" type="text/css">
<script src="/public/Home/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
$('#intro').find('img').each(function(){
  var alt = this.alt;

  if (alt){
    $(this).after('<span class="caption" style="display:none">' + alt + '</span>');
  }

  $(this).wrap('<a href="' + this.src + '" title="' + alt + '" class="fancybox" rel="gallery" />');
});
(function($){
  $('.fancybox').fancybox();
})(jQuery);
</script>

<!-- Initiate flexslider plugin -->
<script type="text/javascript">
    $(document).ready(function($) {
      $('.flexslider').flexslider({
        animation: "fade",
        prevText: "",
        nextText: "",
        directionNav: true
      });
      /*
      <!-- Baidu统计 -->
      var _hmt = _hmt || [];
      (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?c71a239d451f8149ac6ebf67a0c992fa";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
      })();
		*/
      <!-- Google 统计 -->
      /*
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
*//*
      ga('create', 'UA-63685503-1', 'auto');
      ga('send', 'pageview');

      */
    });
      
</script>
@yield('js')
</body>
</html>
