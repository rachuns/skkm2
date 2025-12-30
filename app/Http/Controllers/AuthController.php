<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Models\User;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('nim', $request->username)->orWhere('nidn', $request->username)->first();

        if (!$user) {
            return back()->withErrors([
                'username' => 'NIM / NIDN tidak ditemukan',
            ]);
        }

        if (
            !Auth::attempt([
                'id' => $user->id,
                'password' => $request->password,
            ])
        ) {
            return back()->withErrors([
                'password' => 'Password salah',
            ]);
        }

        return $this->redirectByLevel();
    }

    private function redirectByLevel()
    {
        $level = Auth::user()->level->nama_level;

        return match ($level) {
            'admin' => redirect('dashboardAdmin'),
            'kaprodi' => redirect('dashboardKaprodi'),
            'dosen_pembimbing' => redirect('/dosen/dashboard'),
            'mahasiswa' => redirect('/mahasiswa/dashboard'),
            default => abort(403),
        };
    }
}
