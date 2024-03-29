<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $userRoles = Auth::user()->roles->pluck('name');
        //dd($userRoles);
        if(!$userRoles->contains('admin')){
<<<<<<< Updated upstream
            return redirect(route('admin_login'))->with('error','İzniniz yok lütfen buradan uzaklaşın!!');
=======
            return redirect(route('admin_login'))->with('error','İzniniz Yok Lütfen Buradan Uzaklaşın!!');
>>>>>>> Stashed changes
        }

        return $next($request);
    }
}
