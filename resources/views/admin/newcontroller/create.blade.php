@extends('admin.layout')
@section('title', '管理员添加')
@section('content')
    <br>
    <br>

    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        新闻添加
    </title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
</head>
<body>
    <center>
        <h1>新闻添加</h1>
        <a href="{{url('new')}}"></a>
    </center>

    <form class="form-horizontal" role="form" action="{{url('new/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">新闻名称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="n_title"
                       placeholder="请输入名称">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">新闻内容</label>
            <div class="col-sm-10">
            <textarea name="n_content" rows="" cols=""  class="form-control" placeholder="请输入内容"></textarea>

            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">新闻添加人</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="n_man"
                       placeholder="请输入名称">
            </div>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">新闻添加人</label>
            <div class="col-sm-10">
                <select name="c_id" id="">
                    <option value="">--请选择--</option>
                    @foreach($res as $v)
                    <option value="{{$v->c_id}}">{{$v->c_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">新闻图片</label>
            <div class="col-sm-10">
                <input type="file" name="n_img">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">添加</button>
            </div>
        </div>
    </form>

</body>
</html>

@endsection

