<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\news;
use App\model\Category;
class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=news::join('category','category.c_id','=','news.c_id')->paginate(3);
        return view('admin.news.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res=category::get();

        return view('admin.news.create',['res'=>$res]);
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
        $post['n_time']=time();
        if($request->hasFile('n_img')){
            $post['n_img']=$this->upload('n_img');
        }
        $res=news::insert($post);
        if(!empty($res)){
            return redirect('news');
        }else{
            return redirect('news/create');
        }
    }
    //文件上传
    public function upload($n_img){
        if(request()->file($n_img)->isValid()) {
            $photo=request()->file($n_img);
            $store_result=$photo->store('uploads');
            return $store_result;
        }
        exit('未获取到上传文件或上传过程出错');
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
        $res=news::where('n_id',$id)->first();
        $data=category::get();
        return view('admin.news.edit',['res'=>$res,'data'=>$data]);
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
        if($request->hasFile('n_img')){
            $post['n_img']=$this->upload('n_img');
        }
        $res=news::where('n_id',$id)->update($post);
        if(!empty($res)){
            return redirect('news');
        }else{
            return redirect('news/create');
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
        $res=news::where('n_id',$id)->delete();
        if(!empty($res)){
            return redirect('news');
        }else{
            return redirect('news/create');
        }
    }
}
