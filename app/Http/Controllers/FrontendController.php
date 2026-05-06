<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function about(){
    return view('about');
  }

 public function product(){
    return view('product');
  }

   public function contact(){
    return view('contact');
  }

  public function submit(Request $request){
  //  dd($request); test garna data  
  Contact::create($request->all());
  return view('success');
  }

}
