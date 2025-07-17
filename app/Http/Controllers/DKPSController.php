<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\DKPS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DKPSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dkps = DKPS::latest()->orderBy('created_at', 'desc')->paginate(10);
        $menuDKPS = 'active';
        return view('dashboard.menudownload.dkps.index', compact('dkps', 'menuDKPS'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menuDKPS = 'active';
        return view('dashboard.menudownload.dkps.create', compact('menuDKPS'));
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

            DKPS::create($validatedData);

            return redirect()->route('dkps.index')->with(['success' => 'Berhasil dibuat']);
        } catch (Exception $e) {
            return redirect()->route('dkps.index')->with(['failed' => 'Ada kesalahan sistem. Error: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $menuDKPS = 'active';
        $dkps = DKPS::findOrFail($id);
        return view('dashboard.menudownload.dkps.show', compact('dkps', 'menuDKPS'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $menuDKPS = 'active';
        $dkps = DKPS::findOrFail($id);
        return view('dashboard.menudownload.dkps.edit', [
            'dkps' => $dkps,
            'menuDKPS' => $menuDKPS
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

            $dkps = DKPS::findOrFail($id);

            if ($request->file('filedata')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $validatedData['filedata'] = $request->file('filedata')->store('images');
            }

            $validatedData['user_id'] = auth()->user()->id;

            $dkps->update($validatedData);

            return redirect()->route('dkps.index')->with(['success' => 'Update successfully']);
        } catch (Exception $e) {
            return redirect()->route('dkps.index')->with(['failed' => 'Ada kesalahan system. error :' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dkps = DKPS::findOrFail($id);
        if ($dkps) {
            $dkps->delete();
            return redirect()->back()->with(['success' => 'deleted successfully']);
        } else {
            return redirect()->back()->with(['failed' => 'Ada kesalahan system']);
        }
    }
}
