<form method="post" action="{{url('category/update/'.$data->c_id)}}"  enctype="multipart/form-data">
	<table border="center" align="center">
    @csrf
        <tr>
            <td>新闻分类</td>
            <td><input type="text" name="c_name" id="" value="{{$data->c_name}}"></td>
        </tr>
        <tr>
            <td>添加人</td>
            <td><input type="text" name="c_man" id="" value="{{$data->c_man}}"></td>
        </tr>
        <tr>
            <td>图片</td>
            <td>	
                <input type="file" name="c_img" id="" >
                <img src="{{env('UPLOAD_URL')}}{{$data->c_img}}" alt="" while="20px" height="40px">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="修改">
            </td>
            <td></td>
        </tr>
	</table>
</form>