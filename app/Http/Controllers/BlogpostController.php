<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use App\Ablog;	
use App\Admin;
use App\About;
use DB;
class BlogpostController extends Controller
{
    
   public function add(){
    	return view('blogpost.editblogpost');
    }

  public function save(Request $request)
   {
   	$file=$request->file('bpimage'); 	
    $filename='bpimage' . time().'.'.$request->bpimage->extension();  
       $file->move("upload/",$filename);

        $dar=new Blogpost;
        $dar->bpimage=$filename;
        $dar->bpcontent=$request->bpcontent; 
        $dar->codeblock=$request->codeblock;
        $dar->typography=$request->typography;
        $dar->bulletpoint=$request->bulletpoint;
        $dar->quoteexample=$request->quoteexample;
        $dar->videocontent=$request->videocontent;

        $dar->save();
        if($dar){
              	return redirect('editblogpost')->with('message','successfully Added');
              }
   }


     public function show(){
    $dar=Blogpost::all();
          return view('blogpost.showblogpost', compact('dar'));
   }

    public function edits($id){
        $dar=Blogpost::find($id);
        return view('blogpost.viewblogpost',compact('dar'));
        }

         public function update(Request $reque){
         if($reque->hasFile('bpimage'))
          {
            $file=$reque->file('bpimage');
        $filename ='bpimage' .time() . '.'.$reque->bpimage->extension();
        $file->move('upload/',$filename);
        $dar=Blogpost::find($reque->id);
        $dar->bpimage=$filename;
        $dar->bpcontent=$reque->bpcontent; 
        $dar->codeblock=$reque->codeblock;
        $dar->typography=$reque->typography;
        $dar->bulletpoint=$reque->bulletpoint;
        $dar->quoteexample=$reque->quoteexample;
        $dar->videocontent=$reque->videocontent;

        $updated=$dar->save();
      }
         else {
          $dar=Admin::find($reque->id);
        $dar->bpcontent=$reque->bpcontent; 
        $dar->codeblock=$reque->codeblock;
        $dar->typography=$reque->typography;
        $dar->bulletpoint=$reque->bulletpoint;
        $dar->quoteexample=$reque->quoteexample;
        $dar->videocontent=$reque->videocontent;
          $updated=$blog->save();
         }
         if ($updated) {
           return redirect('showblogpost')->with('message','succesfully updated');
         }
        }
         public function delete($id)
         {
        $post=Blogpost::find($id);
        $deleted=$post->delete();
        if ($deleted) 
        {
        return redirect('blogpost.showblogpost')->with('message','post succesfully deleted');
        }
    }

}
