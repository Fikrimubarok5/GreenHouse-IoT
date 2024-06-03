<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user', [
            'user' => User::all(),
        ]);
    }

    public function destroy( $id)
    {
        $devices = User::findOrFail($id);

        if ($devices) {
            $devices->delete();
            // return response()->json(['message' => 'Device telah dihapus.'], 200);
            return redirect('/User')->with('success', 'Data berhasil dihapus');
        } else {
            // return response()->json(['message' => 'Device tidak ditemukan.'], 404);
            return redirect('/User')->with('error', 'Data gagal dihapus');
        }
    }
}
