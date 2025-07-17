<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\DED;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DEDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ded = DED::latest()->orderBy('created_at', 'desc')->paginate(10);
        $menuDED = 'active';
        return view('dashboard.menudownload.ded.index', compact('ded', 'menuDED'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuDED = 'active';
        return view('dashboard.menudownload.ded.create', compact('menuDED'));
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
            ]);

            if ($request->file('filedata')) {
                $validatedData['filedata'] = $request->file('filedata')->store('images');
            }

            $validatedData['user_id'] = auth()->user()->id;

            DED::create($validatedData);

            return redirect()->route('ded.index')->with(['success' => 'Berhasil dibuat']);
        } catch (Exception $e) {
            return redirect()->route('ded.index')->with(['failed' => 'Ada kesalahan sistem. Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $menuDED = 'active';
        $ded = DED::findOrFail($id);
        return view('dashboard.menudownload.ded.show', compact('ded', 'menuDED'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $menuDED = 'active';
        $ded = DED::findOrFail($id);
        return view('dashboard.menudownload.ded.edit', [
            'ded' => $ded,
            'menuDED' => $menuDED
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
            ]);

            if ($request->file('filedata')) {
                $validatedData['filedata'] = $request->file('filedata')->store('images');
            }

            $ded = DED::findOrFail($id);

            if ($request->file('filedata')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $validatedData['filedata'] = $request->file('filedata')->store('images');
            }

            $validatedData['user_id'] = auth()->user()->id;

            $ded->update($validatedData);

            return redirect()->route('ded.index')->with(['success' => 'Update successfully']);
        } catch (Exception $e) {
            return redirect()->route('ded.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ded = DED::findOrFail($id);
        if ($ded) {
            $ded->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }
}
