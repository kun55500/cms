<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>品牌列表</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
</head>
<body>
    <center>
        <h1>新闻列表</h1>
    </center>
    <table class="table">
        <thead>
        <tr>
            <th>新闻id</th>
            <th>新闻名称</th>
            <th>新闻内容</th>
            <th>新闻添加人</th>
            <th>新闻时间</th>
            <th>新闻图片</th>
            <th>操作</th>
        </tr>
        </thead>
        @foreach ($data as $v)
        <tbody>
        <tr>
            <td>{{$v->n_id}}</td>
            <td>{{$v->n_title}}</td>
            <td>{{$v->n_content}}</td>
            <td>{{$v->n_man}}</td>
            <td>{{$v->n_time=date('Y-m-d H:i:s',time())}}</td>
            <td>{{$v->c_name}}</td>
            <td><img src="{{env('UPLOAD_URL')}}{{$v->n_img}}" while="50px" height="50 px"></td>>
            <td>
                <a href="{{url('news/destroy')}}/{{$v->n_id}}" class="btn btn-danger">删除</a>|
                <a href="{{url('news/edit')}}/{{$v->n_id}}" class="btn btn-info">修改</a>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
    {{$data->links()}}
    <!-- ->appends($post) -->
</body>
</html>
