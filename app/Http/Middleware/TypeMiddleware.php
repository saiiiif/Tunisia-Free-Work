<?php

namespace App\Http\Middleware;

use Closure;

class TypeMiddleware
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
        if ($request->membre()->type != 'D')
		{
			return redirect('freelancerHome');
		}
        else 
        {
            return redirect('donneurHome');

        }


        return $next($request);
    }
}
