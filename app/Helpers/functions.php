<?php
    //公共文件夹
    //文件上传
    function upload($c_img){
        if(request()->file($c_img)->isValid()){
            //接收文件
            $photo = request()->file($c_img);
            //上传文件
            $store_result = $photo->store('upoads');
            return $store_result;
        }
            exit('没有文件被上传或者出现上传错误');
    }
?>