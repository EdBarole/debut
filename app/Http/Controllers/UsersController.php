<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:api');
        $this->middleware('guest')->except('logout');
    }

    /**
     * Lists the persisted data for this resource.
     * 
     * @return array
     */
    public function index()
    {
        return response()->json([], 200);
    }
}
