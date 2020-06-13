<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DB;
use App\Blogpost;
use App\ About;
use App\Ablog;

class AboutController extends Controller
{ 
    public function master(){
         $curd=Admin::all();
        return view('frontend.home', compact('curd'));
    }

	public function home(){
		return view('frontend.home');
	}
   public function blogpost(){
         $curd=Admin::all();
         $dar=Blogpost::all();
        return view('frontend.blogpost')->with(compact('curd'))->with(compact('dar'));
    }
    public function about(){

    	  $curd=Admin::all();
          $das=Ablog::all();
        return view('frontend.about')->with(compact('curd'))->with(compact('das'));
    }

     public function bloglist(){
        $curd=Admin::all();
        return view('frontend.bloglist', compact('curd'));
    	// return view('frontend.bloglist');
    }
     public function admindash(){
        return view('frontend.admindash');
    }

    public function display(){
        $curd=Admin::all();
        return view('frontend.home', compact('curd'));
    }


     

}
