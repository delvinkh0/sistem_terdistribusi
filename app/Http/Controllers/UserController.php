<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class UserController extends Controller
{
    public function register(){
        $data['title']='register';
        return view('register',$data);
    }   

    public function register_action(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:user',
            'password' => 'required|min:6|confirmed',
        ]);
    
        $user = new User([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        $user->save();
    
        return redirect()->route('login')->with('success', 'Registration Success, please login');
    }
    public function login(){
        $data['title']='login';
        return view('login',$data);
    }
    public function login_action(request $request){
        $request->validate([
                'email'=> 'required',  
                'password'=> 'required',
        ]);
        if(Auth::attempt(['email' => $request->email,'password' =>$request-> password])){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors('Wrong Username Or Password! Please try again!') ;
    }
    public function index(){
        $title = "home"; // Definisikan variabel $title
        return  view('home', compact('title')); // Kirim variabel $title ke view
    }

    public function changePassword(){
        $data['title'] = 'Change Password';
        return view('change-password', $data);
    }
    
    public function changePasswordAction(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:3',
            'confirm_password' => 'required|same:new_password',
        ]);
    
        $user = Auth::user();
    
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            
    
            return redirect()->route('home')->with('success', 'Password changed successfully.');
        } else {
            return back()->withErrors('Current password is incorrect.')->withInput();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful.');
    }

    
}