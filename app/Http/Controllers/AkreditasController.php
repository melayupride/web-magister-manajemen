<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Akreditas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AkreditasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akreditas = Akreditas::all();
        $menuAkreditas = 'active';
        return view('dashboard.akreditasi.akreditas.index', compact('menuAkreditas', 'akreditas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuAkreditas = 'active';
        return view('dashboard.akreditasi.akreditas.create', compact('menuAkreditas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'body' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:3072',
            ]);

            if ($request->hasFile('image')) {
                $validatedData['image'] = $request->file('image')->store('images', 'public');
            }

            $validatedData['user_id'] = auth()->id();

            Akreditas::create($validatedData);

            return redirect()
                ->route('akreditas.index')
                ->with('success', 'Data akreditasi berhasil ditambahkan!');
                
        } catch (\Exception $e) {
            return redirect()
                ->route('akreditas.index')
                ->with('error', 'Gagal menambahkan data akreditasi. Error: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menuAkreditas = 'active';
        $akreditas = Akreditas::findOrFail($id);
        return view('dashboard.profil.akreditas.edit', [
            'akreditas' => $akreditas,
            'menuAkreditas' => $menuAkreditas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'body' => 'required|string|max:255',
                'description' => 'nullable|string',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:3072',
                'oldImage' => 'nullable|string' // Untuk validasi oldImage dari form
            ]);

            $akreditas = Akreditas::findOrFail($id);

            // Handle image update
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($akreditas->image) {
                    Storage::disk('public')->delete($akreditas->image);
                }
                
                // Store new image
                $validatedData['image'] = $request->file('image')->store('images', 'public');
            } else {
                // Keep the old image if no new image uploaded
                $validatedData['image'] = $akreditas->image;
            }

            // Update record
            $akreditas->update($validatedData);

            return redirect()
                ->route('akreditas.index')
                ->with('success', 'Data akreditasi berhasil diperbarui!');
                
        } catch (\Exception $e) {
            return redirect()
                ->route('akreditas.index')
                ->with('error', 'Gagal memperbarui data akreditasi. Error: ' . $e->getMessage())
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $akreditas = Akreditas::findOrFail($id);
        if ($akreditas) {
            $akreditas->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }
}
