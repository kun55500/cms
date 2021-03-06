@extends('admin.layout')
@section('title', '分类编辑')
@section('content')
    <br>

    <br>
    <form class="margin-top:6% form-horizontal " role="form"action="{{url('category/update/'.$data->c_id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">分类名</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="firstname"name="c_name"
                      value="{{$data->c_name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-sm-2 control-label">添加人</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="lastname"name="c_man"value="{{$data->c_man}}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">修改</button>
            </div>
        </div>
    </form>
@endsection
