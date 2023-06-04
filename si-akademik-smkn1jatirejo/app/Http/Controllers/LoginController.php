<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function on_login(LoginRequest $request)
    {
        $data = array(
            "username" => $request->username,
            "password" => $request->password
        );
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            $dataRole = Auth::user()->role;
            if ($dataRole == "admin") {
                return redirect('/');
            } elseif ($dataRole == "guru") {
                return view('/dashguru');
            } elseif ($dataRole == "siswa") {
                return redirect('/dashsiswa');
            }
            //return redirect('/');
        }
        return redirect('/masuk')->with('pesan', 'error username anda salah');
    }
    public function on_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/masuk');
    }
}