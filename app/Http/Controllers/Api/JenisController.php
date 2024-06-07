<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.jenis', [
            'jenis' => Jenis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [
            'jenis' => 'required',
        ]);

        $device = Jenis::create([
            'jenis' => $request->input('jenis'),
        ]);


        if ($device) {
            return redirect('/api/Jenis')->with('success', 'Data saved');
            // return response()->json([
            //     "message" => "device telah ditambahkan.",
            //     "device" => $device
            // ], 201);
        } else {
            return redirect('/api/Jenis')->with('error', 'Failed to save data');
            // return response()->json(['message' => 'Device tidak ditemukan.'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis = Jenis::findOrFail($id);
        return view('pages.jenis', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $device = Jenis::findOrFail($id);


        $request->validate( [
            'jenis' => 'required',
        ]);


        $device->update($request->all());

        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'Device telah di update.',
        //     'device' => $device
        // ]);
        if ($device) {
            return redirect('/api/jenis')->with('success', 'Data berhasil diubah');
            // return response()->json([
            //     "message" => "device telah ditambahkan.",
            //     "device" => $device
            // ], 201);
        } else {
            return redirect('/api/jenis')->with('error', 'Data gagal diubah');
            // return response()->json(['message' => 'Device tidak ditemukan.'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis)
    {
        //
    }
}
