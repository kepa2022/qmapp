<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
    }
    public function userdata(Request $request)
    {

        $user = DB::table('users')
        ->where('id', '=', $request->userId)
        ->get();
      
       return view('Admin.usercreate',["user"=>$user[0]]);
    }
    public function update(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $designation = $request->input('designation');
        $dept_id = $request->input('dept_id');
        $pen = $request->input('pen');
        $glno = $request->input('glno');
        $mobile = $request->input('mobile');
        $unit = $request->input('unit');
   

        DB::table('users')
        ->where('id', $request->userId)
        ->update([
            'name' => $name,
            'email' => $email,
            'designation' => $designation,
            'dept_id' => $dept_id,
            'pen' => $pen,
            'glno' => $glno,
            'mobile' => $mobile,
            'unit' => $unit,
            'password' => Hash::make($password)
        ]);
        return redirect()->route('admin_home');
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
    public function changerole(Request $request)
    {
       dd($request->id);
    }
    public function userList()
    {
       
        $user = DB::select('select * from users', array(1));
        
        return view("Admin.userslist",["users"=>$user]); 
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
