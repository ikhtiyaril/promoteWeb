<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Discount;
use App\Models\Information;
use App\Models\Portofolio;
use App\Models\Pricing;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $discount = Discount::first();
        $experience = Experience::first();
        $information = Information::all();
        $portofolio = Portofolio::all();
        $pricing = Pricing::all();
        $user = User::all();
        return view('home',compact('discount','experience','information','portofolio','pricing','user'));
    }
}
