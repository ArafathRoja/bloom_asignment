<?php

namespace App\Http\Middleware;

use Closure;

class UserAuthenticated
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
         if( Auth::check() )
        {
            if ( Auth::user()->isAdmin() ) {
                 return redirect(route('admin_dashboard'));
            }
            else if ( Auth::user()->isUser() ) {
                 return $next($request);
            }
        }

        abort(404);
    }
}
