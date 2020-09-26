<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Product;
use illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response;
     */
    public function index()
    {
//        dd("index");
        $product = Product::paginate(10);
        return view('admin/product/product', compact('product'));
    }
    public function productAdd()
    {
        dd("Productadd");
        return view('admin/product/product-add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
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

                    product::create($request->all());

                    return view('admin/product/product');
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
        dd("show");
        return view('admin/product/product-add');
    }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\cr  $cr
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
    {

        $data= Product::find($id);
//       dd($data);


        return view('admin/product/product-edit',compact('data'));

    }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\cr  $cr
         * @return \Illuminate\Http\Response
         */
    public function update(Request $request,Product $id)
    {

//        $request->validate([
//            'name'=>'required',
//            'category'=>'required',
//            'sku'=>'required',
//            'price'=>'required'
//        ]);
////        dd("product");
//
//        $data=Product::find('id');
////            dd('data');
//        Product::update($request->all());
////        dd('Product');

            $page = Product::find($id);
            $id->update($request->all());


            return redirect('/product');
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
