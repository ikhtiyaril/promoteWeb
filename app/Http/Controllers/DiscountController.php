<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Discount;
use App\Models\Information;
use App\Models\Portofolio;
use App\Models\Pricing;
use App\Models\User;

class DiscountController extends Controller
{
    public function store(Request $request)
    {
        Discount::create($request->all());
        return redirect()->back()->with('success', 'Pricing created!');
    }

    public function update(Request $request, $id)
    {
        $discount = Discount::findOrFail($id);
        $discount->update($request->all());
        return redirect()->back()->with('success', 'Pricing updated!');
    }

    public function destroy($id)
    {
        Discount::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Pricing deleted!');
    }
}
