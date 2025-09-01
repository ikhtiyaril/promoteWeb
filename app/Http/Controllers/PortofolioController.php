<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tech_stack' => 'nullable|string', // nanti diolah
            'description' => 'required|string',
            'link_web' => 'required|url',
            'link_github' => 'required|url',
        ]);

        // Handle upload gambar
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('portofolio', 'public');
        }

        // Convert tech_stack JSON string ke DB
        if ($request->filled('tech_stack')) {
            $validated['tech_stack'] = json_encode(json_decode($request->tech_stack, true));
        }

        Portofolio::create($validated);

        return redirect()->back()->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $portofolio = Portofolio::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tech_stack' => 'nullable|string',
            'description' => 'required|string',
            'link_web' => 'required|url',
            'link_github' => 'required|url',
        ]);

        // Handle upload gambar baru (hapus yang lama kalau ada)
        if ($request->hasFile('image')) {
            if ($portofolio->image && Storage::disk('public')->exists($portofolio->image)) {
                Storage::disk('public')->delete($portofolio->image);
            }
            $validated['image'] = $request->file('image')->store('portofolio', 'public');
        }

        // Convert tech_stack JSON string ke DB
        if ($request->filled('tech_stack')) {
            $validated['tech_stack'] = json_encode(json_decode($request->tech_stack, true));
        }

        $portofolio->update($validated);

        return redirect()->back()->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio::findOrFail($id);

        // Hapus file gambar juga biar gak numpuk di storage
        if ($portofolio->image && Storage::disk('public')->exists($portofolio->image)) {
            Storage::disk('public')->delete($portofolio->image);
        }

        $portofolio->delete();

        return redirect()->back()->with('success', 'Portofolio berhasil dihapus!');
    }
}
