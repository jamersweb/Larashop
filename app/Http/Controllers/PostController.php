<?php

namespace App\Http\Controllers;

use App\lara_post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pst = lara_post::all();
        return view('frontend/post/all-post',compact('pst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend/post/add-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        lara_post::create($request->all());
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lara_post  $lara_post
     * @return \Illuminate\Http\Response
     */
    public function show(lara_post $lara_post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lara_post  $lara_post
     * @return \Illuminate\Http\Response
     */
    public function edit($lara_post)
    {
        $post = lara_post::find($lara_post);
        return view('frontend/post/edit-post',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lara_post  $lara_post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$lara_post)
    {
        lara_post::find($lara_post)->update($request->all());
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lara_post  $lara_post
     * @return \Illuminate\Http\Response
     */
    public function destroy($lara_post)
    {
        lara_post::find($lara_post)->delete();
        return redirect()->route('post.index');
    }
}
