<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
class CmsController extends Controller
{
        public function login(){
            return view('admin.admin.login');
        }
        public function loginDo(){
            $post=request()->except('_token');
            $res=Admin::where($post)->first();
            if ($res){
                session(['admin'=>$res]);
                request()->session()->save();
                echo "<script>alert('登录成功');location.href='/admin';</script>";
            }else{
                echo "<script>alert('账号或密码错误');location.href='/login';</script>";
            }
        }
        public function doLogin(){
            if(session('admin')){
                session(['admin'=>null]);
                echo "<script>alert('退出成功');location.href='/';</script>";
            }

        }
}
