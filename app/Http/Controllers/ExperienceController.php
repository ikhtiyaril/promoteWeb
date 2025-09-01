<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Discount;
use App\Models\Information;
use App\Models\Portofolio;
use App\Models\Pricing;
use App\Models\User;

class ExperienceController extends Controller
{
    public function store(Request $request)
    {
        Experience::create($request->all());
        return redirect()->back()->with('success', 'Pricing created!');
    }

    public function update(Request $request, $id)
    {
        $experience = Experience::findOrFail($id);
        $experience->update($request->all());
        return redirect()->back()->with('success', 'Pricing updated!');
    }

    public function destroy($id)
    {
        Experience::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Pricing deleted!');
    }
}
