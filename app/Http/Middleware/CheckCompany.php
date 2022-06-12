<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckCompany
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
        if (Auth::user()!=null){
            $userRoles = Auth::user()->roles->pluck('name');
            If (!$userRoles->contains('company')){
                return redirect(route('sign-in'))->with('error','You do not have permission');
            }}
        else{
            return redirect(route('sign-in'))->with('error','You do not have permission');
        }

        return $next($request);
    }
}
