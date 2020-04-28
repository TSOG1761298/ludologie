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

    //  utilisation des faker voir aussi user.php etape 5

    // public function index()
    // {  
    //     $user = User::fake();
    
    //     return $user;
    // }

    // -----------------------------


    // etape 6 premier view a partir du faker voir aussi index.blade.php
    // public function index()
    // {  
    //     $user = User::fake();
    
    //     return view("users.index",["user"=>$user]);
    // }

    // etape 7 on remplace user par techno temporairement

    public function index()
    {  
        $user = User::fake();
         
        //etape 8 on remet user
        // return view("techno.index",["user"=>$user]);
        return view("users.index",["user"=>$user]);
        //------------------------------
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
        //
    }
}
