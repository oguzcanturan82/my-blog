<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    protected function authenticated(Request $request, User $user)
    {
        $redirect = '';
        if ($user->type != "admin") {
            $redirect = '/';
        }
        return redirect($redirect);
    }
}
