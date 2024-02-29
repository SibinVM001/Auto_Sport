<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Models;

class IsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        if(auth()->user() == null){
            return redirect('/login');
        }
        
        
        $states = State::all();

        return response()->view('bookNow',[
            "model_id" => $request->model_id,
            "states" => $states
        ]); 
    }
}