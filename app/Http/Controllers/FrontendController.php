<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Register;
use App\Models\truth;
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

     public function truth(){
    return view('truth');
  }

  public function send(Request $request){
    truth::create($request->all());
    return view('Thankyou');
  }

  public function table(){
    $datas = Register::get();
    // dd($datas);
    return view('table',compact('datas'));
   }

public function register(){
    return view('register');
   }


   public function reg(Request $request){
    // dd($request);
        $request->validate([
        'full_name'=>'required|min:8',
        'email'=>'required|email',
        'phone'=>'required|min:10|max:20',
        'college'=>'nullable|min:1'
    ]);
        Register::create($request->all());
        return redirect()->back()->with('success', 'Student registered successfully!');
    }

    public function edit(string $id){
      $userdata = Register::find($id);
      return view('edit',compact('userdata'));
    }

    public function update(Request $request,Register $register){
     $register->update($request->all());
     return redirect()->to('/table');

    }
    public function delete(Register $register){
        $register->delete();
        return redirect()->route('table');
    }
}




