<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->CheckRole();
    }

    public function CheckRole()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $this->authorize('admin');

        return view('admin.index');
    }
}
