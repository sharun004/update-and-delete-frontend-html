<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Usercontroller extends Controller
{
    //
   public function index(){
        return view ('index');
    }

    public function details(Request $request){
   
            $username = $request->input('username');
            $email = $request->input('email');
            $password = $request->input('password');
            $phone = $request->input('phone');
            $gender = $request->input('gender');
            $language = $request->input('language');
            $zipc = $request->input('zipc');
            $about = $request->input('about');
            
            //insert operation
    
            DB::insert("insert into shaform(username, email,password,phone,gender,language,zipc,about) values(?,?,?,?,?,?,?,?)" ,
            [$username,$email,$password,$phone,$gender,$language,$zipc,$about]);
            return 'Record inserted! <a href="/">Click, here</a>';
    
    }
    public function user(){
        $ud = DB::select("select*from shaform");
        return view('user',['ud'=>$ud]);
    }
    public function edit($id){
        $data = DB::select("select * from shaform where id=?", [$id]);
        return view('data_edit', ['data' =>$data]);
    
    }
    public function update(Request $request,$id){
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $gender = $request->input('gender');
        $language = $request->input('language');
        $zipc = $request->input('zipc');
        $about = $request->input('about');
           
    
            DB::update("update shaform set username=?, email=?,
    password=?, phone=?, gender=?, language=?, zipc=?,
    about=?  where id=?",
    [$username, $email, $password, $phone, $gender, $language, $zipc, $about, $id]);
            return 'Record updated successfully! <a
    href="/view-record">Click here to go back</a>';
    
    }
    public function delete($id){
        DB::delete("delete from shaform where id=?",[$id]);
        return 'Record deleted  successfully! <a
    href="/view-record">Click here to go back</a>';
    
    }
    }
    
