<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class VisitorsMiddleware
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
        if (!Sentinel::check()) {
        
            return $next($request);
            
        }else{

            $slug = Sentinel::getUser()->roles()->first()->slug;

            if ($slug == "admin") {
                return redirect()->route('admin-dashboard');
            }elseif ($slug == "user") {
                return redirect()->route('user-dashboard');
            }

        }
    }
}
