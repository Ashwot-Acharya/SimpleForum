<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Hash;

class MessageController extends Controller
{
  
    public function sendMessage(Request $request)
    {
        $this->validate($request,[
            'msg'=>['required'],
        ]);
        Message::create([
            'name'=>auth()->user()->name,
            'message'=>$request->msg
        ]);

        return redirect('/home');
    }

    public function home(){
        $message=Message::get();
        return view ('welcome',[
            'msg'=> $message,
            
        ]);
        // return view('welcome',compact('message'));
        // dd($message);
    }

    public function register(Request $request)
    {
        $this->validate($request,[
            'username'=>['required'],
            'email'=>['required','email','max:255'],
            'password'=>['required','confirmed'],
            
            
        ]);
        User::create([
            'name'=>$request->username,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
    
        ]);
        auth()-> attempt($request->only('username','password'));


        return redirect()->route('message');

    }

    public function logout()
    {
        auth()->logout();
        return redirect('mss');
    }

    public function newregister(){
        return view('register');
    }
    public function login(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'username'=>['required'],
            'password'=>['required']
        ]);

        if(!Auth()->attempt($request->only('username','password'))){
            return back() -> with('status','Invalid Login details');
        }

        return redirect() -> route('message');
       
    }
}
