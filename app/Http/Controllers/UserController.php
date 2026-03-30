<?php

namespace App\Http\Controllers;

// we need to import the user model to be able to create a new user

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
    $incomingFields = $request->validate([
        // we can give them an array of validation
        'name' => ['required', "min:3", "max:20" , Rule::unique('users' , 'name')],
        'email' => ['required', 'email', Rule::unique('users' , 'email')],
        'password' => ['required', 'min:6', 'max:20']
    ]);

     $incomingFields['password'] = bcrypt($incomingFields['password']);
     $user = User::create($incomingFields);
     auth()-> login($user);

      return redirect('/');  // after that make a username and email unique in the database and add the error message in the form
    }
}
