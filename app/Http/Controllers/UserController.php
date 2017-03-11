<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $users = User::all();
        return view('users.index', ['list' => $users]);
    }

    public function show(Request $request, $id)
    {
        $user = User::findOrFail($id);
        return view('users.show')->withData($user);
    }

    public function create(Request $request)
    {
        return view('users.create');
    }

    public function store(Request $request)
    {

        $input = $request->all();
        $this->validate($request, [
            'name' => 'required | string | alpha_dash | max:66',
            'email' => 'required | email',
            'password' => 'required | string | min:8 | max:64',
        ]);
        User::create($input);
        Session::flash('flash_message', 'User successfully added!');
        return redirect('/home');
    }
}
