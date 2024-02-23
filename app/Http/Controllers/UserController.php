<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'name' => 'najib',
                'address' => 'jl. hehe'
            ],
            [
                'name' => 'njiban',
                'address' => 'jl. hehe'
            ],
            [
                'name' => 'hoho',
                'address' => 'jl. hehe'
            ]
        ];

        return view('index', compact('users'));
    }

    public function user($user)
    {
        $users = [
            [
                'name' => 'najib',
                'address' => 'jl. hehe'
            ],
            [
                'name' => 'njiban',
                'address' => 'jl. hehe'
            ]
        ];
        // $user = $users[$user];
        return view('user', ['user' => $users[$user]]);
        // return view('user', compact('users', 'user'));
    }
}
