<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
//   ==========================================================================
//   ------------------------------ Регистация --------------------------------
//   ==========================================================================

    public function registration(Request $request) {
        $user = new User();
        $user->fio = $request->input('fio');
        $user->login = $request->input('login');
        $user->email = $request->input('email');
        $user->password = md5($request->input('password'));
        $user->save();
        return redirect()->back();
    }
//   ==========================================================================
//   ------------------------------ Авторизация -------------------------------
//   ==========================================================================
    public function auth(Request $request){
        $user = User::query()->where('login', $request->input('login'))->where('password', md5($request->input('password')))->first();
        Auth::login($user);
        return redirect()->route('user.profile');
    }
//   -- Переход лк --
    public function profile() {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }
//   -- Выход из лк --
    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
