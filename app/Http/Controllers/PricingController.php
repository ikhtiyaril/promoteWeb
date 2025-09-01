<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pricing;
use Illuminate\Support\Facades\Storage;

class PricingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'price'       => 'required|integer',
            'feature'     => 'required|array',
            'name'        => 'required|string|max:255',
            'information' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Simpan image kalau ada
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('pricing', 'public');
        }

        // Feature disimpan sebagai JSON
      

        Pricing::create($validated);

        return redirect()->back()->with('success', 'Pricing created!');
    }

    public function update(Request $request, $id)
    {
        $pricing = Pricing::findOrFail($id);

        $validated = $request->validate([
            'price'       => 'required|integer',
            'feature'     => 'required|array',
            'name'        => 'required|string|max:255',
            'information' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        // Jika ada gambar baru, hapus lama & simpan baru
        if ($request->hasFile('image')) {
            if ($pricing->image && Storage::disk('public')->exists($pricing->image)) {
                Storage::disk('public')->delete($pricing->image);
            }
            $validated['image'] = $request->file('image')->store('pricing', 'public');
        } else {
            $validated['image'] = $pricing->image; // biar field tetap ada
        }

        // Feature disimpan sebagai JSON
      

        $pricing->update($validated);

        return redirect()->back()->with('success', 'Pricing updated!');
    }

    public function destroy($id)
    {
        $pricing = Pricing::findOrFail($id);

        // Hapus gambar juga kalau ada
        if ($pricing->image && Storage::disk('public')->exists($pricing->image)) {
            Storage::disk('public')->delete($pricing->image);
        }

        $pricing->delete();

        return redirect()->back()->with('success', 'Pricing deleted!');
    }
}
