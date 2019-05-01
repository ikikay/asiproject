<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;

class User {

    protected $auth;

    /**
     * Create a new filter instance. 
     * 
     * @param  Guard  $auth 
     * @return void 
     */
    public function __construct(Guard $auth) {
	$this->auth = $auth;
    }

    /**
     * Handle an incoming request. 
     * 
     * @param  \Illuminate\Http\Request  $request 
     * @param  \Closure  $next 
     * @return mixed 
     */
    public function handle($request, Closure $next) {
	if ($this->auth->user()->role !== "user") {
	    if ($request->ajax()) {
		return response('Unauthorized.', 401);
	    } else {
		$request->session()->flash('error', 'Il faut être User !');

		return redirect()->route('dashboard');
	    }
	}

	return $next($request);
    }
}
