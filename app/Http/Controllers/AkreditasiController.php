<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Akreditasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akreditasi = Akreditasi::latest()->orderBy('created_at', 'desc')->paginate(10);
        $menuAkreditasi = 'active';
        return view('dashboard.akreditasi.akreditasi.index', compact('akreditasi', 'menuAkreditasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuAkreditasi = 'active';
        return view('dashboard.akreditasi.akreditasi.create', compact('menuAkreditasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'filedata' => 'file|mimes:jpeg,png,jpg,pdf|max:5024',
                'body' => 'required|min:10',
                'peringkat' => 'required|string|max:255',
                'status' => 'required|in:Masih Berlaku,Sudah Kedaluwarsa',
                'lembaga_akreditasi' => 'required|string|max:255',
            ]);

            if ($request->file('filedata')) {
                $validatedData['filedata'] = $request->file('filedata')->store('images');
            }

            $validatedData['user_id'] = auth()->user()->id;

            Akreditasi::create($validatedData);

            return redirect()->route('akreditasi.index')->with(['success' => 'Berhasil dibuat']);
        } catch (Exception $e) {
            return redirect()->route('akreditasi.index')->with(['failed' => 'Ada kesalahan sistem. Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $menuAkreditasi = 'active';
        $akreditasi = Akreditasi::findOrFail($id);
        return view('dashboard.akreditasi.akreditasi.show', compact('akreditasi', 'menuAkreditasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $menuAkreditasi = 'active';
        $akreditasi = Akreditasi::findOrFail($id);
        return view('dashboard.menudownload.akreditasi.edit', [
            'akreditasi' => $akreditasi,
            'menuAkreditasi' => $menuAkreditasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'filedata' => 'file|mimes:jpeg,png,jpg,pdf|max:5024',
                'body' => 'required|min:10',
                'peringkat' => 'required|string|max:255',
                'status' => 'required|in:Masih Berlaku,Sudah Kedaluwarsa',
                'lembaga_akreditasi' => 'required|string|max:255',
            ]);

            $akreditasi = Akreditasi::findOrFail($id);

            // Handle file upload
            if ($request->file('filedata')) {
                // Delete old file if exists
                if ($akreditasi->filedata) {
                    Storage::delete($akreditasi->filedata);
                }
                $validatedData['filedata'] = $request->file('filedata')->store('images');
            } else {
                // Keep the old file if no new file is uploaded
                $validatedData['filedata'] = $akreditasi->filedata;
            }

            $validatedData['user_id'] = auth()->user()->id;

            $akreditasi->update($validatedData);

            return redirect()->route('akreditasi.index')->with(['success' => 'Data akreditasi berhasil diperbarui']);
        } catch (Exception $e) {
            return redirect()->route('akreditasi.index')->with(['failed' => 'Ada kesalahan sistem. Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $akreditasi = Akreditasi::findOrFail($id);
        if ($akreditasi) {
            $akreditasi->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }
}
