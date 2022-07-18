<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Appointment;
use App\Models\Pharmaceutical_item;
use App\Models\Doctor_review;
use App\Models\Doctor;
use \PDF;


use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
  
public function list(){
    $users = Users::where('userID','!=',"0")->get();
    return view('admin.list')->with('user', $users);
}

public function addUser(){
    return view('admin.addUser');
}
public function addUserSubmit(Request $request){
    $validate = $request->validate([
        'name' => 'required| min:3',
        'email' => 'required',
        'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6|same:password',
        'dob' => 'required',
        'gender' => 'required',
        'role' => 'required'
    ],
    ['name.required'=>"Please put you name here",
    'name.min'=>"Name must be at least 3 characters long"],
);
    $user = new Users();

    $user->name = $request->name;
    $user->email = $request->email;
    $user->phoneNumber = $request->phone;
    $user->password = md5($request->password);
    $user->dob = $request->dob;
    $user->gender = $request->gender;
    $user->role = $request->role;
    $user->save();

    return redirect()->route('listAdmin');
}
public function APIlist(){
    $users = Users::where('userID','!=',"0")->get();
    return  $users;
}
public function APIpost(Request $request){
    
    $user = new Users();

    $user->name = $request->name;
    $user->email = $request->email;
    $user->phoneNumber = $request->phoneNumber;
    $user->password = md5($request->password);
    $user->dob = $request->dob;
    $user->gender = $request->gender;
    $user->role = $request->role;
    $user->save();

    return $request;
}
}