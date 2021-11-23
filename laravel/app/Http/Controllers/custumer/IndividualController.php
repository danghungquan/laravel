<?php

namespace App\Http\Controllers\custumer;

use App\Http\Controllers\Controller;
use App\Models\Custumer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndividualController extends Controller
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
        $this->authorize('custumer');
        $data = Auth::user()->join_custumer;

        return view('custumer.individual', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('custumer');
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
        $this->authorize('custumer');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function show(Custumer $individual_ct)
    {
        $this->authorize('custumer');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function edit(Custumer $individual_ct)
    {
        $this->authorize('custumer');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custumer $individual_ct)
    {
        $this->authorize('custumer');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $individual_ct)
    {
        $this->authorize('custumer');
        if ($individual_ct->delete()) {
            return redirect()->route('individual_ct.index')->with('error', 'Xóa thành công');
        }
        return redirect()->route('individual_ct.index')->with('success', 'Xóa thất bại');
    }
}
