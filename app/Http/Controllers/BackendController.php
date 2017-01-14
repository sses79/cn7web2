<?php

namespace App\Http\Controllers;

use App\User;

class BackendController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */
    public function showDashboard()
    {
        return view('backend.dashboard', ['users' => User::all()]);
    }

//    public function showView()
//    {
//        return Redirect::to('backend/login')->with('error', 'You must be logged in!');
//
//    }

}
