@extends('admin.layout')
@section('title', '友情链接添加')
@section('content')
    <br>
    <br>


<form class="margin-top:6% form-horizontal " role="form"action="{{url('blog/store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">链接名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"name="b_name"
                   placeholder="请输入链接名">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">链接</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname"name="b_url"
                   placeholder="请输入链接">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
</form>
@endsection
