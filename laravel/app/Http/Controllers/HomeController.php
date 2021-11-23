<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user();

        if ($role === null) {
            return view('home');
        } else {
            $role = Auth::user()->role;
            $status = Auth::user()->status;
            if ($role === 1 && $status === 1) {
                return view('admin.index');
            }
            if ($role === 2 && $status === 1) {
                return view('home');
            }
            Auth::logout();
            return redirect()->route('home')->with('error', 'Account has been locked');
        }
    }
}
