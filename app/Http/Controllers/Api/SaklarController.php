<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Saklar;
use Illuminate\Http\Request;

class SaklarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.saklar', [
            'saklar' => Saklar::all(),
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
        $request->validate([
            'name' => 'required',
        ]);

        $saklar = Saklar::create($request->all());

        if ($saklar) {
            return redirect('/api/saklar')->with('success', 'Data saved');
            // return response()->json([
            //     "message" => "device telah ditambahkan.",
            //     "device" => $device
            // ], 201);
        } else {
            return redirect('/api/saklar')->with('error', 'Failed to save data');
            // return response()->json(['message' => 'Device tidak ditemukan.'], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Saklar $saklar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saklar $saklar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saklar $saklar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saklar $saklar)
    {
        //
    }
}
