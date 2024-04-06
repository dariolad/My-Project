<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends Controller
{
    public function usersList()
    {
        $users=User::all();
        return new JsonResource($users);
    }
}