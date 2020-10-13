<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
//        dd("index");
        $product = Product::paginate(10);
        return view('admin/product/product',compact('product'));
    }
    public function productAdd()
    {
//        dd("Productadd");
        return view('admin/product/product-add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
//        dd("create");
        return view('admin/product/product-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        if(isset($_GET)){
//            switch ($_GET['search']){
//                case "st
                $request->validate([
                        'name'=>'required',
                        'category'=>'required',
                        'sku'=>'required',
                        'price'=>'required'
                    ]);

                    Product::create($request->all());

                    return redirect()->route('product.index');
//                        ->with('success','Product created successfully.');
            }



        /**
         * Display the specified resource.
         *
         * @param  \App\cr  $cr
         * @return \Illuminate\Http\Response
         */
    public function show($id)
    {
//        dd("show");
        return view('admin/product/product-add');
    }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Product  $product
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
         */
    public function edit($id)
    {

        $product= Product::find($id);
//       dd($data);
        return view('admin/product/product-edit',compact('product'));

    }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Product  $request
         * @return \Illuminate\Http\RedirectResponse
         */
    public function update(Request $request,$id)
    {

        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'sku'=>'required',
            'price'=>'required'
        ]);
////        dd("product");
//
//        $data=Product::find('id');
////            dd('data');
//        Product::update($request->all());
////        dd('Product');

            $product = Product::find($id);
            $product->update($request->all());


            return redirect()->route('product.index');
    }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\cr  $cr
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
    {
        $data=Product::find($id);
        $data->delete();

        return redirect('/product');
    }
}
