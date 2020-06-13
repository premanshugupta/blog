<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Ablog;
use App\About;
use DB;

class AdminController extends Controller
{
   public function sidebar(){
   	return view('backend.changesidebar');
   }


   public function save(Request $request)
   {
   	$file=$request->file('image'); 	
    $filename='image' . time().'.'.$request->image->extension();  
       $file->move("upload/",$filename);

        $curd=new Admin;
        $curd->name=$request->name;
        $curd->image=$filename;
        $curd->intro=$request->intro;
        $curd->save();
        if($curd){
              	return redirect('changesidebar')->with('message','successfully Added');
              }
   }

  public function shows(){
    $curd=Admin::all();
         return view('backend.showsidebar')->with(compact('curd'));
   }

   public function edit($id){
        	$curd =Admin::find($id);
        return view('backend.editsidebar',compact('curd'));
        }
        public function update(Request $reque){
         if($reque->hasFile('image'))
          {
            $file=$reque->file('image');
        $filename ='image' .time() . '.'.$reque->image->extension();
        $file->move('upload/',$filename);
        $curd=Admin::find($reque->id);
        $curd->name=$reque->name;
        $curd->image=$filename;
        $curd->intro=$reque->intro;

        $updated=$curd->save();
      }
         else{
          $curd=Admin::find($reque->id);
          $curd->name=$reque->name;
          $curd->intro=$reque->intro;
          $updated=$blog->save();
         }
         if ($updated) {
           return redirect('display')->with('message','succesfully updated');
         }
        }
         public function delete($id)
         {
        $post=Admin::find($id);
        $deleted=$post->delete();
        if ($deleted) 
        {
        return redirect('showsidebar')->with('message','post succesfully deleted');
        }
    }
}
