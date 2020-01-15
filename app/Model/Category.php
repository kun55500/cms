<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey='c_id';
    protected $table='Category';


    /**
     * 可以被批量赋值的属性.
     *白名单
     * @var array
     */
    //protected $fillable = ['brand_name','brand_url','brand_logo','brand_desc'];


    /**
     * 不能被批量赋值的属性
     *黑名单
     * @var array
     */
    protected $guarded = [];

    //如果你不想要这些 Laravel 自动管理的数据列，在模型类中设置 $timestamps 属性为 false：
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;
}
