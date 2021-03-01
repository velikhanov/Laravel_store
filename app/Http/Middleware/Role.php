<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public const Admin = '1';
     public const CEO = '2';
     public function handle(Request $request, Closure $next, ... $roles){
         $user = Auth::user();

         $role = Auth::user()->role;

         if (!in_array($user->hasRole(), $roles)) {
           return redirect()->back();
        }

        return $next($request);
     }

}
