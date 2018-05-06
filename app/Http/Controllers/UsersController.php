<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $users = User::all();

        return view('console.users.index')->with('users', $users);
    }

    public function create()
    {
        return view('console.users.add');
    }
}
