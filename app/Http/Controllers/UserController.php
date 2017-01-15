<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show a list of all the users.
     *
     * @param Request $request
     * @return View
     */
    public function getIndex(Request $request)
    {
        // Grab all the users
        $users = User::All();

        // Do we want to include the deleted users?
        if ($request->input('withTrashed')) {
            $users = User::withTrashed()->get();
        } elseif ($request->input('onlyTrashed')) {
            $users =User::onlyTrashed()->get();
        }

        // Show the page
        return View('backend.user.index', compact('users'));
    }
}
