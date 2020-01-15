<form method="post" action="{{url('category/create')}}"  enctype="multipart/form-data">
	<table border="center" align="center">
    @csrf
        <tr>
            <td>新闻分类</td>
            <td><input type="text" name="c_name" id=""></td>
        </tr>
        <tr>
            <td>添加人</td>
            <td><input type="text" name="c_man" id=""></td>
        </tr>
        <tr>
            <td>图片</td>
            <td>	
                <input type="file" name="c_img" id="" >
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="提交">
            </td>
            <td></td>
        </tr>
	</table>
</form>