<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Administrasi;
use App\Models\Instrumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstrumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instrumen = Instrumen::latest()->orderBy('created_at', 'desc')->paginate(10);
        $menuInstrumen = 'active';
        return view('dashboard.akreditasi.instrumen.index', compact('instrumen', 'menuInstrumen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuInstrumen = 'active';
        return view('dashboard.akreditasi.instrumen.create', compact('menuInstrumen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'link' => 'required|string',
                'body' => 'required|min:10',
            ]);

            $validatedData['user_id'] = auth()->user()->id;

            Instrumen::create($validatedData);

            return redirect()->route('instrumenakred.index')->with(['success' => 'Berhasil dibuat']);
        } catch (Exception $e) {
            return redirect()->route('instrumenakred.index')->with(['failed' => 'Ada kesalahan sistem. Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $menuInstrumen = 'active';
        $instrumen = Instrumen::findOrFail($id);
        return view('dashboard.akreditasi.instrumen.edit', [
            'instrumen' => $instrumen,
            'menuInstrumen,' => $menuInstrumen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $request->validate([
                'link' => 'required|string',
                'body' => 'required|min:10',
            ]);

            $instrumen = Instrumen::findOrFail($id);

            $validatedData['user_id'] = auth()->user()->id;

            $instrumen->update($validatedData);

            return redirect()->route('instrumenakred.index')->with(['success' => 'Update successfully']);
        } catch (Exception $e) {
            return redirect()->route('instrumenakred.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $instrumen = Instrumen::findOrFail($id);
        if ($instrumen) {
            $instrumen->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }
}
