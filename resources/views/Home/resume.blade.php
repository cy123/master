@extends('Home.base')
@section('css')
    <link rel="stylesheet" href="{{asset('public/Admin/editormd/css/editormd.preview.css')}}" />
@endsection

@section('categorys')
	<li><a href="categories/C-Cpp/index.html" class="animsition-link">C/Cpp<small>(2)</small></a></li>

	<li><a href="categories/CSS3/index.html" class="animsition-link">CSS3<small>(1)</small></a></li>
@endsection
@section('link')
   <li><a href="http://miibotree.com/" class="animsition-link">Miibotree</a></li>

   <li><a href="http://homeway.me/" class="animsition-link">小草</a></li>
@endsection

@section('content')
<section id="intro">
    <div class="container">
	     <div class="row">
            <div class="col-md-8 col-md-offset-2 opening-statement" >
                <div id="test-editormd-view2">
                <textarea rows="" cols="" >{{$resumes->content}}</textarea>
                </div>
                <div class="clearfix"></div>
                <hr class="nogutter">
            </div>
        </div>
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
