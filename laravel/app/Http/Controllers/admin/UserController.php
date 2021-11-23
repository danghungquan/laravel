<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        $datas = User::Orderby('role', 'ASC')->paginate(10);
        return view('admin.user.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('admin');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $role = DB::table('group')->get();
        $this->authorize('admin');
        $custumer = $user->join_custumer;
        return view('admin.user.edit', ['user' => $user, 'custumer' => $custumer, 'role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('admin');
        $kq = $user->update($request->only('status', 'role'));
        if ($kq) {
            return redirect()->route('user.index')->with('success', 'Successful handling');
        } else {
            return redirect()->route('user.index')->with('error', 'Handling failure');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $admin = DB::table('users')->where('role', 1)->get();
        if (($admin->count() < 2) && ($user->role === 1)) {
            return redirect()->route('user.index')->with('error', 'You cannot delete, must have at least one admin user');
        }

        if ($user->join_custumer()->count() >= 1) {
            return redirect()->route('user.index')->with('error', 'You cant delete, user has user');
        } else {
            $user->delete();
            return redirect()->route('user.index')->with('success', 'Delete successfully');
        }
        return redirect()->route('user.index')->with('error', 'Delete failure');
    }
}
