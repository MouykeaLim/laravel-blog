<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $users = [
            1 => 'Song Rotha',
            2 => 'Kim Nimol',
            3 => 'Veng Phalla',
        ];
        if(array_key_exists($id, $users)) {
            return view('user.profile', ['user' => $users[$id]]);
        }
        else{
            return "User not found...";
        }
    }
}
