<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function change_password(Request $req, User $user) {

        $req->validate([
            'password' => ['required','string', 'min:8','confirmed'],
            'password_confirmation' =>['required','same:password']
        ]);

        $user->update([
            'password' => Hash::make($req->password) 
        ]);

        return redirect()->route('users.index')->with('message','Password Updated Sucessfully');

    }
}
