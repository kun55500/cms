<?php


//单双文件上传
function upload($logo){
    $photo = request()->file($logo);
    if(is_array($photo)){
        $result=[];
        foreach($photo as $v){
            if($v->isValid()){
                $result[]=$v->store('uploads');
            }
        }
        return $result;
    }else{
        if($photo->isValid()){
            $store_result = $photo->store('uploads');
            return $store_result;
        }
    }
    exit('未获取到上传文件或上传过程出错');
}

