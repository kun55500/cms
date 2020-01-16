<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Admin::paginate(3);
        return view('admin.admin.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=$request->except('_token');
        if($request->hasFile('logo')){
            $post['logo'] =$this->upload('logo');
        }
//        dd($post);
        $res=Admin::insert($post);
        if ($res){
            echo "<script>alert('添加成功');location.href='/admin';</script>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Admin::where('id',$id)->first();
        return view('admin.admin.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=$request->except('_token');
        if($request->hasFile('logo')){
            $post['logo'] =$this->upload('logo');
        }
//        dd($post);
        $res=Admin::where('id',$id)->update($post);
        if ($res>=0){
            echo "<script>alert('修改成功');location.href='/admin';</script>";
        }else if($res=0){
            echo "<script>alert('修改无变化');location.href='/admin';</script>";
        }else{
            echo "<script>alert('修改失败');location.href='admin/edit';</script>";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Admin::destroy($id);
        if ($data){
            echo "<script>alert('删除成功');location.href='/admin';</script>";
        }
    }

    //单双文件上传
    public function upload($logo){
        if (request()->file($logo)->isValid()) {
            $photo = request()->file($logo);
            $store_result = $photo->store('uploads');
            return $store_result;
        }
        exit('未获取到上传文件或上传过程出错');
    }
}
