<html><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - 布局</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('public/Admin/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <link href="{{asset('public/Admin/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">

    <!-- Morris -->
    <link href="{{asset('public/Admin/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/Admin/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/Admin/css/style.min.css?v=4.0.0')}}" rel="stylesheet"><base target="_blank">
    <link href="{{asset('public/Admin/editormd/css/editormd.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  <form action="{{url('resume/'.$resumes->id)}}" method="post" target="iframe4">
                      {!! csrf_field() !!}
                      <input type="hidden" name="_method" value="PUT">
                      <div id="test-editormd"><textarea rows="" cols="">{{$resumes->content}}</textarea></div>
                      <button class="btn btn-info" type="submit" target="iframe4">提交</button>
                  </form>                  
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('public/Admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{asset('public/Admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <script src="{{asset('public/Admin/js/content.min.js?v=1.0.0')}}"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!-- editor -->
        <script src="{{asset('public/Admin/editormd/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/Admin/editormd/editormd.min.js')}}"></script>
        <script type="text/javascript">
			var testEditor;

            $(function() {
                testEditor = editormd("test-editormd", {
                    width   : "100%",
                    height  : 400,
                    syncScrolling : "single",
                    path    : "{{asset('public/Admin/editormd')}}/lib/"
                });
                
                /*
                // or
                testEditor = editormd({
                    id      : "test-editormd",
                    width   : "90%",
                    height  : 640,
                    path    : "../lib/"
                });
                */
            });
        </script>
</body>
</html>
