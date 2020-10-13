<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\lara_page;
//use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pgs= lara_page::all();
        return view('admin/page/all-pages',compact('pgs'));

//        $pgs= lara_page::latest()->paginate(5);
//        return view('admin/page/all-pages',compact('pgs'))->with('i',(request()->input('page' , 1)-1)*5);
    }

    public function ecommerce()
    {
        return view('admin/ecommerce-dashboard/ecommerce-dashboard');
    }

    public function mystore()
    {
        return view('admin/store/store-content');
    }
    public function histroy()
    {
        return view('admin/order-histroy/histroy');
    }
    public function customer()
    {
        return view('/admin/customer-detail/customer-detail');
    }

    public function editcustormer()
    {
        return view('/admin/edit-customer/edit-customer');
    }
    public function notification()
    {
        return view('/admin/notification/notification');
    }

    public function addpage()
    {
        // return view('admin/page/add-new-page');
    }
//    public function editpage()
////    {
////        return view('admin/page/edit-page');
////    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/page/add-new-page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        lara_page::create($request->all());
        return redirect()->route('page.index');
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
        $page = lara_page::find($id);
        return view('admin/page/edit-page',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        lara_page::find($id)->update($request->all());
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lara_page::find($id)->delete();
        return redirect()->route('page.index');
    }
}
