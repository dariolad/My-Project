<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user=User::create([
            'name' => 'ciccio',
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
        return redirect('/');
    }
}
