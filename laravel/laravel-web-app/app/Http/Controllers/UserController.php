<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser($id)
    {
        $user = User::find($id);
        return view('user', ['user' => $user, 'id' => $id]);
    }
}
