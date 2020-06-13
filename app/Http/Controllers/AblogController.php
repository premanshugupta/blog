<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ablog;
use App\Admin;
use App\About;
use App\Blogpost;
use DB;
class AblogController extends Controller
{
    public function form(){
    	return view('backend.editaboutme');
    }

    public function save(Request $request){
	
	$file=$request->file('aimage'); 	
    $filename='aimage' . time().'.'.$request->aimage->extension();  
    $file->move("upload/",$filename);

       $file1=$request->file('simage'); 	
       $filename='simage' . time().'.'.$request->simage->extension();  
       $file1->move("upload/",$filename);

        $das=new ablog;
        $das->aboutme=$request->aboutme;
        $das->aimage=$filename;
        $das->aboutblog=$request->aboutblog;
        $das->skills=$request->skills;
        $das->sideproject=$request->sideproject;
        $das->simage=$filename;
        $das->save();
        if($das){
              	return redirect('editaboutme')->with('message','successfully Added');
    }
    }
    public function show(){
    $das=Ablog::all();
          return view('backend.showaboutme', compact('das'));
   }
    public function edit($id){
        $das =Ablog::find($id);
        return view('backend.showaboutme',compact('das'));
        }

        public function update(Request $reque){
          $reque->hasFile('image');
        $das=Ablog::find($reque->id);
        $file=$reque->file('aimage');
        $filename ='aimage' .time() . '.'.$reque->aimage->extension();
        $file->move('upload',$filename);

        $file1=$reque->file('simage');
        $filename ='simage' .time() . '.'.$reque->simage->extension();
        $file1->move('upload',$filename);
        
       $das->aboutme=$request->aboutme;
        $das->aimage=$filename;
        $das->aboutblog=$request->aboutblog;
        $das->skills=$request->skills;
        $das->sideproject=$request->sideproject;
        $das->simage=$filename;
        $updated=$das->update();
         if($updated)
          {
            return redirect('editaboutme')->with('message','das successfully update !');
          }
        }

        public function delete($id)
         {
        $post=Ablog::find($id);
        $deleted=$post->delete();
        if ($deleted) 
        {
        return redirect('backend.viewabout')->with('message','post succesfully deleted');
        }
    }
}
