<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // This controller handles user-related actions, such as login.

    // Authenticate the user based on the provided email and password.
    function login(Request $req)
    {
        // Retrieve the user with the provided email from the database.
        $user = User::where(['email' => $req->email])->first();

        // Check if the user does not exist or the password does not match.
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not matched";
        } else {
            // Store the authenticated user's data in the session and redirect to the homepage.
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
}
