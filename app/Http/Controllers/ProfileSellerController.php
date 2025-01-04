<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileSellerController extends Controller
{
    public function index()
    {
        // Mengambil data pengguna yang sedang login
        $user = Auth::user();

        // Mengembalikan view dengan data pengguna
        return view('seller.profileSeller.profileSeller', compact('user'));
    }

    public function updateSeller(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->name = $request->fullName;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function deleteSeller(Request $request)
    {
        $request->validate([
            'accountActivation' => 'required',
        ]);

        $user = Auth::user();
        $user->delete();

        return redirect('/profile-seller')->with('success', 'Account deleted successfully.');
    }
}
