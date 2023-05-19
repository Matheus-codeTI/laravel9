<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        return view('user', [
            'name' => 'Matheus araujo',
            'user' => 'Lucas ribeiro',
        ]);
    }
    // public function crud(Request $request)
    // {
    //     return view('usuarios', [
    //         'Matheus' => 'crud',
    //         'gustavo' => 'aaa',
    //     ]);

    // }
}
