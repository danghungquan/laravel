<?php

namespace App\Http\Controllers\custumer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Custumer\StoreRequest;
use App\Http\Requests\Custumer\UpdateRequest;
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
        $this->authorize('custumer');
        return view('custumer.index');
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
    public function store(StoreRequest $request)
    {
        $this->authorize('custumer');
        if ($request->has('file_upload')) {
            $file = $request->file_upload; // láy giá trị của file
            $ext = $request->file_upload->extension(); //láy đuôi ảnh
            $file_name = time() . '-' . 'custumer.' . $ext; //tạo tên file
            $file->move(public_path('uploads'), $file_name); // lưu ảnh vào folder uploads
        }
        $request->merge(['image' => $file_name]); // thay đổi giá trị khi lưu vào data base
        if (Custumer::create($request->all())) {
            // hàm with là hàm tạo thàm số đầu tiên là tên session và giá trị là tham số thứ 2 và dùng hàm has để gọi
            return redirect()->route('product_ct');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function show(Custumer $custumer)
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
    public function edit(Custumer $custumer_ct)
    {
        $this->authorize('custumer');
        return view('custumer.edit', compact('custumer_ct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Custumer $custumer_ct)
    {
        $this->authorize('custumer');
        if ($request->has('file_upload')) {
            $file = $request->file_upload; // láy giá trị của file
            $ext = $request->file_upload->extension(); //láy đuôi ảnh
            $file_name = time() . '-' . 'custumer.' . $ext; //tạo tên file
            $file->move(public_path('uploads'), $file_name); // lưu ảnh vào folder uploads
            $request->merge(['image' => $file_name]);
            if (isset($custumer_ct->image)) {
                $file_image = $custumer_ct->image;
            }
        }
        $kq = $custumer_ct->update($request->only('address', 'job', 'full_name', 'first_name', 'last_name', 'sex', 'year_of_birth', 'phone', 'image', 'contact'));
        if ($kq) {
            if (isset($file_image)) {
                // dd(url('public/uploads/' . $file_image));
                unlink('public/uploads/' . $file_image);
            }
            return redirect()->route('product_ct.index');
        } else {
            return redirect()->route('product_ct.edit', $custumer_ct->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Custumer  $custumer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custumer $custumer)
    {
        $this->authorize('custumer');
        //
    }
}
