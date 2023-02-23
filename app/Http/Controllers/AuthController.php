<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //
    public function login(LoginRequest $r)
    {
        //Validation was made by LoginRequest
        $email = $r->email;
        $password = $r->password;

        if (!$token = $this->apiguard()->attempt(["email" => $email, "password" => $password])) {
            return makeJson(403, "Error, email atau password salah");
        }
        $nama = $this->apiguard()->user()->nama;
        return makeJson(200, "Berhasil Login!", ["token" => $token, "nama" => $nama]);
    }

    public function logout(Request $r)
    {
        $this->apiguard()->logout();
        return makeJson(200, "Berhasil Logout");
    }

    public function getAuthUser(Request $r)
    {
        $user = $this->apiguard()->user();
        return makeJson(200, "Berhasil mendapatkan user token", $user);
    }
}
