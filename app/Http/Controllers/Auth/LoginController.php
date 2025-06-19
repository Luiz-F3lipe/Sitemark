<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request)
    {
        $user = User::query()
            ->where('email', $request->email)
            ->first();
        
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                auth()->login($user);
                return to_route('dashboard');
            }
        }

        return back()->with(["message" => "Credentials invalid"]);
    }
}
