<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Custumer;
use Illuminate\Http\Request;

class CustumerController extends Controller
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
        $datas = Custumer::Orderby('id', 'DESC')->paginate(10);
        return view('admin.custumer.index', compact('datas'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function show(Custumer $custumer)
    {
        $this->authorize('admin');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Custumer $custumer)
    {
        $this->authorize('admin');
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custumer $custumer)
    {
        $this->authorize('admin');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custumer $custumer)
    {
        $this->authorize('admin');
        if ($custumer->delete()) {
            return redirect()->route('custumer.index')->with('success', 'Successful delete');
        } else {
            return redirect()->route('custumer.index')->with('error', 'Delete failed');
        }
    }
}
