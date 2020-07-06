<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use DB;

class UserController extends Controller
{
	
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
		$user = User::findOrFail($id);

        return view('user.profile', ['user' => $user]);
    }


    public function index()
    {
        $users = User::with('order')
			->orderBy('created_at', 'desc')
			->paginate(10);

		return view('users', ['users' => $users]);
    }
	
}
