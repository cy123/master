@extends('Home.base')

@section('css')
    <link rel="stylesheet" href="{{asset('public/Admin/editormd/css/editormd.preview.css')}}" />
@endsection


@section('content')
<section id="intro">
    <div class="container">
	     <div class="row">
            <div class="col-md-8 col-md-offset-2 opening-statement">
                <div id="test-editormd-view2">
                  <textarea>  {{$article->content}}</textarea>
                </div>
                <div class="clearfix"></div>
                <hr class="nogutter">
            </div>
        </div>
    </div>
    <div class="duoshuo">
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            var disqus_shortname = 'superkieran';
            (function(){
                var dsq = document.createElement('script');
                dsq.type = 'text/javascript';
                dsq.async = true;
                dsq.src = 'https://' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            }());
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>




        <div class="ds-thread" data-thread-key="post/37/" data-title="一张 CD 的动画" data-url="http://go.kieran.top/post/37/"></div>
        <script type="text/javascript">
            var duoshuoQuery = {short_name:"kieran"};
            (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0]
                || document.getElementsByTagName('body')[0]).appendChild(ds);
            })();
        </script>
    </div>
</section>         
@endsection

@section('js')
        <script src="{{asset('public/Admin/editormd/lib/marked.min.js')}}"></script>
        <script src="{{asset('public/Admin/editormd/lib/prettify.min.js')}}"></script>       
        <script src="{{asset('public/Admin/editormd/lib/raphael.min.js')}}"></script>
        <script src="{{asset('public/Admin/editormd/lib/underscore.min.js')}}"></script>
        <script src="{{asset('public/Admin/editormd/lib/sequence-diagram.min.js')}}"></script>
        <script src="{{asset('public/Admin/editormd/lib/flowchart.min.js')}}"></script>
        <script src="{{asset('public/Admin/editormd/lib/jquery.flowchart.min.js')}}"></script>
        <script src="{{asset('public/Admin/editormd/editormd.js')}}"></script>  
   <script type="text/javascript">
    $(function() {
        var testEditormdView, testEditormdView2;
        /*
        $.get("test.md", function(markdown) {
            
		    testEditormdView = editormd.markdownToHTML("test-editormd-view", {
                markdown        : markdown ,//+ "\r\n" + $("#append-test").text(),
                //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
                htmlDecode      : "style,script,iframe",  // you can filter tags decode
                //toc             : false,
                tocm            : true,    // Using [TOCM]
                tocContainer    : "#custom-toc-container", // 自定义 ToC 容器层
                //gfm             : false,
                //tocDropdown     : true,
                // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
                emoji           : true,
                taskList        : true,
                tex             : true,  // 默认不解析
                flowChart       : true,  // 默认不解析
                sequenceDiagram : true,  // 默认不解析
            });
            
            //console.log("返回一个 jQuery 实例 =>", testEditormdView);
            
            // 获取Markdown源码
            //console.log(testEditormdView.getMarkdown());
            
            //alert(testEditormdView.getMarkdown());
        });
            */
        testEditormdView2 = editormd.markdownToHTML("test-editormd-view2", {
            htmlDecode      : "style,script,iframe",  // you can filter tags decode
            emoji           : true,
            taskList        : true,
            tex             : true,  // 默认不解析
            flowChart       : true,  // 默认不解析
            sequenceDiagram : true,  // 默认不解析
        });
    });
</script>  

@endsection