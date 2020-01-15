<table border="1" align="center">
@csrf
    <tr>
        <td>id</td>
        <td>新闻分类</td>
        <td>添加人</td>
        <td>图片</td>
        <td>时间</td>
        <td>操作</td>
    </tr>
    @foreach ($gets as $v)
        <tr>
            <td>{{$v->c_id}}</td>
            <td>{{$v->c_name}}</td>
            <td>{{$v->c_man}}</td>
            <td>
            <img src="{{env('UPLOAD_URL')}}{{$v->c_img}}" alt="" while="20px" height="40px">
            </td>
            <td>{{$v->c_time}}</td>
            <td>
                <a href="{{url('category/destroy/'.$v->c_id)}}">删除</a>
                <a href="{{url('category/edit/'.$v->c_id)}}">修改</a>
            </td>
        </tr>
    @endforeach
</table>