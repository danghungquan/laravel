<?php

namespace App\Http\Controllers\custumer;

use App\Http\Controllers\Controller;
use App\Http\Requests\product\StoreRequest;
use App\Models\Category;
use App\Models\Custumer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
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
        return view('custumer.product', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('custumer');
        $ct_id = Auth::user()->join_custumer;
        $data_category = Category::OrderBy('id', 'ASC')->get();
        return view('custumer.addproduct', [
            'data_category' => $data_category,
            'ct_id' => $ct_id
        ]);
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
            // dd($request);
            $file->move(public_path('uploads'), $file_name); // lưu ảnh vào folder uploads
        }
        $request->merge(['image' => $file_name]); // thay đổi giá trị khi lưu vào data base
        if (Product::create($request->all())) {
            // hàm with là hàm tạo thàm số đầu tiên là tên session và giá trị là tham số thứ 2 và dùng hàm has để gọi
            return redirect()->route('product_ct.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $this->authorize('custumer');
        return 54;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize('custumer');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
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
    public function destroy(Product $product_ct)
    {
        $this->authorize('custumer');
        dd($product_ct);
    }
}
