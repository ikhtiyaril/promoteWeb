<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Portofolio;
use App\Models\Pricing;
use App\Models\Information;
use App\Models\Experience;
use App\Models\Discount;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::first();
        $portofolio = Portofolio::all();
        $pricing = Pricing::all();
        $information = Information::first();
        $experience = Experience::first();
        $discount = Discount::first();

        return view('dashboardpage', compact(
            'user', 'portofolio', 'pricing', 'information', 'experience','discount'
        ));
    }
}
