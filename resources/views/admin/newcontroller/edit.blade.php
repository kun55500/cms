<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        新闻修改
    </title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
</head>

<body>
    <center>
        <h1>新闻修改</h1>
    </center>
    <form class="form-horizontal" role="form" action="{{url('news/update')}}/{{$res->n_id}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">新闻名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$res->n_title}}"  name="n_title"
                       placeholder="请输入名称">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">新闻内容</label>
            <div class="col-sm-10">
            <textarea name="n_content" rows="" cols=""  class="form-control" placeholder="请输入内容">{{$res->n_content}}</textarea>

            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">新闻添加人</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$res->n_man}}"  name="n_man"
                       placeholder="请输入名称">
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">新闻类型</label>
            <div class="col-sm-10">
                <select name="c_id" id="">
                    <option value="">--请选择--</option>
                    @foreach($data as $v)
                    <option value="{{$v->c_id}}" {{$res->c_id=$v->c_id?'selected':''}}>{{$v->c_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">新闻图片</label>
            <div class="col-sm-10">
                <img src="{{env('QWE')}}{{$res->n_img}}" while="50px" height="50 px">
                <input type="file" name="n_img">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">修改</button>
            </div>
        </div>
    </form>

</body>
</html>