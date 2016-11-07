 <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>H+ 后台主题UI框架 - 基础表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('/Admin/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <link href="{{asset('/Admin/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{asset('/Admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('/Admin/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/Admin/css/style.min.css?v=4.0.0')}}" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class=""><a class="btn btn-info" href="articles/add" target="iframe5" >写文章</a></div>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>边框</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="table_basic.html#">选项1</a>
                                </li>
                                <li><a href="table_basic.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>标题</th>
                                    <th>分类名</th>
                                    <th>标签</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($articles as $article)
                                <tr>
                                    <td>{{$article->id}}</td>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->name}}</td>
                                    <td></td>
                                    <td>
                                        <a href="{{url('articles/'.$article->id.'/edit')}}" class="btn btn-info" target="iframe5">修改</a>
                                        <form action="{{url('articles/'.$article->id)}}" method="post" target="iframe5" style="display: inline-block">
                                            <!--删除时要使用DELETE方法-->
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
   
    </div>
    <script src="{{asset('/Admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{asset('/Admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <script src="{{asset('/Admin/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('/Admin/js/content.min.js?v=1.0.0')}}"></script>
    <script src="{{asset('/Admin/js/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('/Admin/js/demo/peity-demo.min.js')}}"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>