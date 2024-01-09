<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class LoginController extends Controller
{
    public function index() {
        $message = session('successMessage');
        return view('login.index')->with("successMessage", $message);
    }

    public function store(Request $request) {
        $requested = $request->only(['email', 'password']);
        if (!Auth::attempt($requested)) {
          return redirect()->back()->withErrors(['Usuário ou senhas inválidos']);
        };

        return to_route('lots.index');
    }

    public function destroy() {
        Auth::logout();
        return view('login.index')->with('successMessage', null);
    }


}
