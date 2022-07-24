<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        // đây chính là hàm mà chúng ta làm việc
        // tham số 1 chính là request
        // tham số thứ 2 chính là next : nếu cho phép next thì chúng ta return ra biến next và cho tham số request vào => cho phép request đi tiếp
         
        return $next($request);
    }
}
