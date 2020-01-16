<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
<<<<<<< HEAD
        
=======
        $res=session('admin');
        if (!$res){
            echo "<script>alert('请登录');location.href='/login';</script>";
        }
>>>>>>> kun
        return $next($request);
    }
}
