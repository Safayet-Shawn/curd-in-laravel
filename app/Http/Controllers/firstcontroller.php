<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class firstcontroller extends Controller
{
    public function first(){

        $contact=DB::table('contacts')->get();
    	return view('page.contact')->with('datapaisi',$contact);
    }
    public function insertdata(){
    	return view('page.insertdata');
    }
    public function dataadd(Request $request){
    	$dataa=array();
    	$dataa['name']=$request->name;
    	$dataa['email']=$request->email;
    	$dataa['phone']=$request->phone;
    	$dataa['description']=$request->description;
   		DB::table('contacts')->insert($dataa);
   		return Redirect()->route('contact');
    }
    public function deletedata($id){
    	DB::table('contacts')->where('id',$id)->delete();
    	return Redirect()->route('contact');
    }
    public function updatedata($id){
    	$edt=DB::table('contacts')->where('id',$id)->first();
    	return view('page.edit',compact('edt'));
    }
    public function edited(Request $request,$id){
    	$eddaatt=array();
    	$eddaatt['name']=$request->name;
    	$eddaatt['email']=$request->email;
    	$eddaatt['phone']=$request->phone;
    	$eddaatt['description']=$request->description;
    	DB::table('contacts')->where('id',$id)->update($eddaatt);
    	return Redirect()->route('contact');
    }
    public function viewdata($id){
    	$vvv=DB::table('contacts')->where('id',$id)->first();
    	return view('page.viewinfo',compact('vvv'));
    }

}