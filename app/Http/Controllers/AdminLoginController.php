<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Discount;
use App\Models\Information;
use App\Models\Portofolio;
use App\Models\Pricing;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
   public function showLogin(){
return view('loginadmin');
   }


   public function login(Request $request){

    $credentials = $request->validate([
'email'=> ['required','email'],
'password'=>['required']
    ]);
   

$user = User::where('email',$credentials['email'])->first();

if($user && Hash::check($credentials['password'],$user->password)){
    if($user->role === 'admin'){
        Auth::login($user);
  $request->session()->regenerate();

  return redirect()->intended('admin/dashboard');
    }
       return back()->withErrors(['email' => 'Kamu bukan admin!']);
}
return back()->withErrors(['email' => 'Email atau password salah!']);
   }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('loginadmin.form');
    }
}
