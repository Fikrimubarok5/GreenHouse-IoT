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
        return view('pages.saklar');

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
        //
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
