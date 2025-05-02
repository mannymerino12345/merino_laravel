<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role as RoleModel;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$id): Response
    {
        
        $guards = empty($guards) ? [null] : $guards;

        // dd(Auth::user());
        if($id != Auth::user()->role_id){
            return redirect()->route('login')->with('error', 'You do not have access to this page');
        }
        return $next($request);
        
        // return response()->json([
        //     'message' => 'Unauthorized'
        // ], 403);
    }
}
