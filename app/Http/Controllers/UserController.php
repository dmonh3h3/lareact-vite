<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{

    public static function kontol()
    {
        $data = User::all();

        return Inertia::render('adi/kontol', [
            'data' => $data
        ]);
    }
}
