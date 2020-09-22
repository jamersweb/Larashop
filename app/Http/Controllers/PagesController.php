<?php

namespace App\Http\Controllers;
use App\lara_page;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

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
        return view('frontend/page/all-pages',compact('pgs'));

    }
    public function addpage()
    {
        return view('frontend/page/add-new-page');
    }
//    public function editpage()
////    {
////        return view('frontend/page/edit-page');
////    }

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

//      dd($request->input('editor1'));
        lara_page::create($request->all());
        return redirect('/add-page');
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
    public function edit(lara_page $id)
    {
        return view('frontend/page/edit-page',compact('id'));

//    return 'edit page';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,lara_page $id)
    {
        $page = lara_page::find($id);
        $id->update($request->all());
        return redirect('/all-page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
//        $page = lara_page::find($id);
////        $page->destroy();
//        $task = lara_page::find($id);

//        $category = lara_page::find($pages);
//        $category->destroy();
        $data=Lara_page::find($id);
        $data->delete();
        return redirect('/all-page');

//        Session::flash('flash_message', 'Task successfully deleted!');

//        return redirect()->route('tasks.index');
    }
}
