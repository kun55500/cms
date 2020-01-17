@extends('admin.layout')
@section('title', '新闻分类展示')
@section('content')



    <body>

    <table class="table table-hover">
        <caption>新闻分类展示页面</caption>

        <tr>
            <td>ID</td>
            <td>新闻分类</td>
            <td>添加人</td>
            <td>添加时间</td>
            <td>编辑</td>
        </tr>

        @if($data)
            @foreach($data as $v)

                <tr>
                    <td>{{$v->c_id}}</td>
                    <td>{{$v->c_name}}</td>
                    <td>{{$v->c_man}}</td>
                    <td>{{date('Y-m-d H:i:s'),$v->c_time}}</td>
                    <td><a  href="{{url('category/destroy/'.$v->c_id)}}" class="btn btn-danger">删除</a>
                        <a href="{{url('category/edit/'.$v->c_id)}}" class="btn btn-info">修改</a>
                    </td>
                </tr>

            @endforeach
        @endif
    </table>
    {{$data->links()}}
    </body>















@endsection
