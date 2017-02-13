<?php

namespace App\Http\Controllers;

use App\Admin;

use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function isLoggedIn(Request $request){
        if(\Session::has('admin')){
            return redirect('/adminPage');
        }else {
            return view('adminLogin');
        }
    }

    public function authenticate(Request $request){

        $input=$request->all();
        $pass=$input['password'];
        $username=$input['username'];

        if(Admin::where([['username','=' , $username],['password', '=', $pass]]) -> first()){
            \Session::put('admin', 'ulogovan');
            return redirect()->intended('/adminPage');
        }else{
            return redirect('/adminLogin');
        }

    }

    public function logout(Request $request){
        \Session::forget('admin');
        return redirect('/');
    }

    public function index()
    {
        //
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
