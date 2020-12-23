<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mybook;
use DB;

class usercontroller extends Controller
{
    public function showbook($cat)
    {
       
        $book=DB::table('allbooks')->get();
        // return view('user.showbooks');
        return view('user.showbooks',compact('book','cat'));
    }
    public function show($id)
    {
        // dd($id);
        $sbook=DB::table('allbooks')->where('id',$id)->first();
        // return view('user.showbooks');
        return view('user.show',compact('sbook'));
        // dd($sbook);
    }
    public function mbshow($id)
    {
        // dd($id);
        $sbook=DB::table('allbooks')->where('book_name',$id)->first();
      
        return view('user.show',compact('sbook'));
        // dd($sbok);
    }


    public function addmybook($id)
    {
        // dd($id);
        $mybook=DB::table('allbooks')->where('id',$id)->first();
        // return view('user.showbooks');
        // return view('user.show',compact('sbook'));
        // dd($mybook->book_name,$mybook->id);


        // $bname=$req->book_name;
  
        // $cat=$req->catagories_name;
        // $wname=$req->writer_name;

        // $bookimage=$id->file('book_image');
        // $imagename=time().'.'.$bookimage->extension();
        // $mbookimage->move(public_path('File/mybookimage/'),$mybook->book_image);
        
        // $b=$req->file('book');
        // $filename=time().'.'.$b->extension();
        // $mbooks->move(public_path('File/mybook/'),$mybook->book_details);


        $mbook=new mybook();
        $mbook->mbook_name=$mybook->book_name;
        $mbook->mcat=$mybook->cat;
        $mbook->mwriter_name=$mybook->writer_name;
        $mbook->mbook_image=$mybook->book_image;
        $mbook->mbook_details=$mybook->book_details;
        
        $mbook->save();
        
        return redirect()->back();  
    }


    public function mybook($mbookname)
    {
        // dd($id);
        $mbook=DB::table('mybooks')->get();
        return view('user.mybook',compact('mbook','mbookname'));
        
        // return view('user.show',compact('sbook'));
        // dd($sbook);
    }
}
    

