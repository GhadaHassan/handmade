<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::get(); // get all data 
        return view("user.index",compact('users'));  // to show all data in serve or database
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        //  dd($request->all());  ==> take all data form form 
        // take all data form form 
        $user->name = $request->get("name");  // take with name of input form in create.blade.php
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->save();
        return redirect ()->action("AdminController@index");
//return view("user.create");  //show create.blade.php (view)
    
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
        $users = find($id);
        return view('user.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $users = Task::find($id);
        $users->name=$request->get('phone');
        $users->description=$request->get('txt2');
        $users->done=$request->get('pass');
        $users->wight=$request->get('txt3');
        $users->User_Id=$request->get('txt4');
        $users->save();
        return redirect ()->action("UserController@index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
