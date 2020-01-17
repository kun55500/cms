<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Blog::paginate(3);
        return view('admin.blog.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.blog.create');
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
        $res=Blog::insert($post);
        if ($res){
            echo "<script>alert('添加成功');location.href='/blog';</script>";
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
        $data=Blog::where('b_id',$id)->first();
        return view('admin.blog.edit',['data'=>$data]);
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
        $res=Blog::where('b_id',$id)->update($post);
        if ($res>=0){
            echo "<script>alert('修改成功');location.href='/blog';</script>";
        }else if($res=0){
            echo "<script>alert('修改无变化');location.href='/blog';</script>";
        }else{
            echo "<script>alert('修改失败');location.href='blog/edit';</script>";
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
        $data=Blog::destroy($id);
        if ($data){
            echo "<script>alert('删除成功');location.href='/blog';</script>";
        }
    }
}
