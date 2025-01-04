<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Ambil semua pengguna
        return view('seller.manajemenPengguna.manajemenPengguna', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        Log::info('Editing user: ', ['user' => $user]); // Tambahkan log
        return view('seller.manajemenPengguna.editPengguna', compact('user'));
    }
    
    

    public function update(Request $request, $id)
    {
        // Validasi dan update pengguna
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required|string|in:user,admin', // Validasi role
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all()); // Update semua data termasuk role
        return redirect()->route('manajemen-pengguna')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('manajemen-pengguna')->with('success', 'Pengguna berhasil dihapus.');
    }
}
