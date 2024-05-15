<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Testcase101
{
    /*
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       /* dd($request->path()); */
      /*   dd('Hello'); */
      if($request->path() == 'middleware1') {
        return response("Hello this is middle ware.");
          }
        return $next($request);
    }
}
