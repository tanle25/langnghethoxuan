<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin\ProductAsk;
use Session;

class ProductAskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->guard('shop')->user();
        $products = $user->products()->get()->pluck('id')->all();
        $asks = ProductAsk::whereIN('product_id',$products)->get();
        return view('back-end.shop.ask.list',['data'=>$asks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = auth()->guard('shop')->user();
        $products = $user->products()->get()->pluck('id')->all();
        $obj = ProductAsk::whereIn('product_id',$products)->where('id',$id)->first();
        if($obj == null){
            Session::flash('error-product-ask', 'Không tìm thấy dữ liệu.');
            return redirect()->route('product-ask.index');
        }
        $obj->delete();
        Session::flash('success-product-ask', 'Xóa thông tin thành công.');
        return redirect()->route('product-ask.index');
    }
}
