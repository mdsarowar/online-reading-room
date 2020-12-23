<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\allbooks;
use image;

class admincontroller extends Controller
{
    public function addbook()
    {
        return view('admin.addbook');
    }

    

    
    public function addtable(Request $req)
    {
        
       
        
        $validat=$req->validate([
            'book_name'=>'required',
            'catagories_name'=>'required'
            // 'book_image'=>'required',
            // 'books'=>'required'
        ]);
        
        
        
        
        
    $bname=$req->book_name;
    // dd($bname);
    $cat=$req->catagories_name;
    $wname=$req->writer_name;

    $bookimage=$req->file('book_image');
    $imagename=time().'.'.$bookimage->extension();
    $bookimage->move(public_path('File/images/'),$imagename);
    
    $b=$req->file('book');
    $filename=time().'.'.$b->extension();
    $b->move(public_path('File/book/'),$filename);


    $boo=new allbooks();
    $boo->book_name=$bname;
    $boo->cat=$cat;
    $boo->writer_name=$wname;
    $boo->book_image=$imagename;
    $boo->book_details=$filename;
    
    $boo->save();
    
    return redirect()->back();  


        
        

        // $data=array();
        // dd($data);
        // $data['book_name']=$req->book_name;
        // $data['cat']=$req->catagories_name;
        // $data['writer_name']=$req->writer_name;
        // $data['book_details']=$req->book;
        // $sar=DB::table('books')->insert($data);
        // return redirect()->back();
        // $re=DB::table('books')->insert($data);

        // return redirect();



           // $img=time().'.'.$photo->getClientOriginalExtension();
            // $location=public_path('images/'.$img);
            // Image::make($photo)->save($location);
    
        
            // $user->photo=$img;
       
        
    }
}
