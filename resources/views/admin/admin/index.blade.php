@extends('admin.layout')
@section('title', '管理员管理')
@section('content')



<body>

<table class="table table-hover">
    <caption>管理员展示页面</caption>

    <tr>
        <td>ID</td>
        <td>用户名</td>
        <td>头像</td>
        <td>编辑</td>
    </tr>

    @if($data)
        @foreach($data as $v)

    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->uname}}</td>
        <td><img src="{{env('UPLOAD_URL')}}{{$v->logo}}"  width="80px"  height="80px" alt=""></td>
        <td><a  href="{{url('admin/destroy/'.$v->id)}}" class="btn btn-danger">删除</a>
            <a href="{{url('admin/edit/'.$v->id)}}" class="btn btn-info">修改</a>
        </td>
    </tr>

        @endforeach
        @endif
</table>
{{$data->links()}}
</body>















@endsection
