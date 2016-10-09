 <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>H+ 后台主题UI框架 - 基础表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('public/Admin/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <!--editor-->
     <link href="{{asset('public/Admin/editormd/css/editormd.css')}}" rel="stylesheet">
   <!--<link href="{{asset('public/Admin/css/style.min.css?v=4.0.0')}}" rel="stylesheet"><base target="_blank">--> 

</head>

<body class="gray-bg">
    <h3>编辑文章</h3>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-10">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <form class="form-horizontal" role="form" action="{{url('/articles/'.$article->id)}}" method="post" target="iframe5">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">标题</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control"  name="title" value="{{$article->title}}" placeholder="title">
                                </div>
                            </div>
                             <div class="form-group">
                                <!--
                                <label for="inputEmail3" class="col-sm-2 control-label">所属分类</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="cateId" placeholder="category">
                                </div>
                                -->
                                <label class="col-sm-2 control-label">所属分类</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="cate_id">
                                        @foreach($allCates as $allCate)
                                            @if($article->cate_id==$allCate->id)
                                                <option selected="selected" value="{{$allCate->id}}">{{$allCate->name}}</option>
                                            @else
                                                <option value="{{$allCate->id}}">{{$allCate->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">标签</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="tag_id">
                                        <!--<option value='0'>分类名</option>-->
                                        @foreach($tags as $tag)
                                            @if($article->tag_id==$tag->id)
                                                <option selected="selected" value="{{$tag->id}}">{{$tag->tag}}</option>
                                            @else
                                                <option value="{{$tag->id}}">{{$tag->tag}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">正文</label>
                                <div class="col-sm-10">
                                    <div id="test-editormd"><textarea rows="" cols="">{{$article->content}}</textarea></div>
                                </div>
                            </div> 
                            
                            <div>    
                                <button type="submit" class="btn btn-default ">确定</button>
                            </div>    
                        </form>
                    </div>
    
                </div>
            </div>
        </div>
   
    </div>
    <script src="{{asset('public/Admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{asset('public/Admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <!--
    <script src="{{asset('public/Admin/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('public/Admin/js/content.min.js?v=1.0.0')}}"></script>
    <script src="{{asset('public/Admin/js/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('public/Admin/js/demo/peity-demo.min.js')}}"></script>
    
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    -->

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
                    path    : "{{asset('public/Admin/editormd')}}/lib/",
                    imageUpload    : true,
                    imageFormats   : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                    imageUploadURL : "{{url('imagesUpload')}}"
                });

            });
        </script>
</body>
</html>