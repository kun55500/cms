@extends('admin.layout')
@section('title', '管理员编辑')
@section('content')
    <br>
    <br>


<form class="margin-top:6% form-horizontal " role="form"action="{{url('admin/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"name="uname"
                   value="{{$data['uname']}}">
        </div>
    </div>

    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">头像</label>
        <div class="col-sm-10">
            <img src="{{env('UPLOAD_URL')}}{{$data->logo}}"  width="80px"  height="80px" alt="">
            <input type="file" class="form-control" id="lastname"name="logo">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">修改</button>
        </div>
    </div>
</form>
@endsection
