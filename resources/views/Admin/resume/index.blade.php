<html><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 布局</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('Admin/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <link href="{{asset('Admin/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">

    <!-- Morris -->
    <link href="{{asset('Admin/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">

    <link href="{{asset('Admin/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/css/style.min.css?v=4.0.0')}}" rel="stylesheet"><base target="_blank">
    <link rel="stylesheet" href="{{asset('Admin/editormd/css/editormd.preview.css')}}" />

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">   
                  <div class=" text-right " style="background-color: #fff;padding:10px 20px 10px;">
                        <a class="btn btn-info" href="add" target="iframe4" >添加简历</a>
                        <a class="J_menuItem btn btn-info" href="7" target="iframe4">修改简历</a>
                    </div>        
            </div>
            <div class="col-lg-12">
                <div  id ="test-editormd-view2">
                  <textarea rows="" cols=""></textarea>
                        
                  
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('Admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{asset('Admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <script src="{{asset('Admin/js/content.min.js?v=1.0.0')}}"></script>
    <script src="{{asset('Admin/editormd/editormd.min.js')}}"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    
        <script src="{{asset('Admin/editormd/lib/marked.min.js')}}"></script>
        <script src="{{asset('Admin/editormd/lib/prettify.min.js')}}"></script>
        
        <script src="{{asset('Admin/editormd/lib/raphael.min.js')}}"></script>
        <script src="{{asset('Admin/editormd/lib/underscore.min.js')}}"></script>
        <script src="{{asset('Admin/editormd/lib/sequence-diagram.min.js')}}"></script>
        <script src="{{asset('Admin/editormd/lib/flowchart.min.js')}}"></script>
        <script src="{{asset('Admin/editormd/lib/jquery.flowchart.min.js')}}"></script>

        <script src="{{asset('Admin/editormd/editormd.js')}}"></script>    
    
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

</body>
</html>
