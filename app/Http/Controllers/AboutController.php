<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function About(){
        return view('about');
    }

    public function AllContracts(){

       
         $va = DB::table('contracts')->get();
        return view('allcontracts')->with('data',$va);
    }
     
     public function InsertData(){
        return view('insert');
     }
     public function DataAdded(Request $request){
        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;

         $db = DB::table('contracts')->insert($data);

         return redirect()->route('all.contracts');


     }
    public function Delete($id)
    {
       $dlt = DB::table('contracts')->where('id',$id)->delete();

         return redirect()->route('all.contracts');

    }

    public function Edit($id)
    {
         $edt = DB::table('contracts')->where('id',$id)->first();
         return view('editcontract',compact('edt'));
    }

    public function Update(Request $request,$id)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;
        $upd=DB::table('contracts')->where('id',$id)->update($data);

         return redirect()->route('all.contracts');

    }
    public function View($id)
    {
        $view = DB::table('contracts')->where('id',$id)->first();
        return view('view',compact('view'));

    }
    

}
