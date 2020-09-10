<?php

namespace App\Http\Controllers;

use App\cr;
use App\userprofiles;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/user-table/all-user');
    }
    public function addNew()
    {
        return view('frontend/user-table/new-user');
    }
    public function userProfile()
    {
        return view('frontend/user-table/your-profile');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view ('frontend.user-table.new-user-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        request()->validate([
            'uname'=> 'required',
            'useremail'=> 'required',
            'fname'=>'required',
            'lname'=> 'required',
            'pasword' => 'required',
            'userroll' => 'required'

        ]);

        $user = new userprofiles();

        $user->uname = request('uname');
        $user->useremail = request('useremail');
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->pasword = request('pasword');
        $user->userroll = request('userroll');

        $user->save();

        redirect('/add-new');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
