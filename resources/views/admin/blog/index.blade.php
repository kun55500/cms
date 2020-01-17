@extends('admin.layout')
@section('title', '友情连接展示')
@section('content')



    <body>

    <table class="table table-hover">
        <caption>友情链接展示页面</caption>

        <tr>
            <td>ID</td>
            <td>链接名</td>
            <td>链接</td>
            <td>编辑</td>
        </tr>

        @if($data)
            @foreach($data as $v)

                <tr>
                    <td>{{$v->b_id}}</td>
                    <td>{{$v->b_name}}</td>
                    <td>{{$v->b_url}}</td>
                    <td><a  href="{{url('blog/destroy/'.$v->b_id)}}" class="btn btn-danger">删除</a>
                        <a href="{{url('blog/edit/'.$v->b_id)}}" class="btn btn-info">修改</a>
                    </td>
                </tr>

            @endforeach
        @endif
    </table>
    {{$data->links()}}
    </body>















@endsection
