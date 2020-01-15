<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// 实例化一个model
use App\Model\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // 接收值
         $post = request()->except('_token');
          // 时间
        $post['c_time'] = date('Y-m-d h:i:s',time());
         // 文件上传
        if(request()->hasFile('c_img')){
            // echo 123;die;
             $post['c_img']=upload('c_img');
        }
        //添加到数据库
        $ins = Category::insert($post);
        //判断并跳转
        if($ins){
            return redirect('category/store');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $gets = Category::get();
        return view('admin.category.show',['gets'=>$gets]);
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
        $data = Category::where('c_id',$id)->first();
        return view('admin/category/unp',['data'=>$data]);
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
         // 接收值
         $post = request()->except('_token');
         
         // 文件上传
        if(request()->hasFile('c_img')){
            // echo 123;die;
             $post['c_img']=upload('c_img');
        }
        //添加到数据库
        $ins = Category::where('c_id',$id)->update($post);
        //判断并跳转
        if($ins!==false){
           return redirect('category/store');
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
        $del = Category::where('c_id',$id)->delete();
        if($del){
            return redirect('category/store');
        }
    }
}
