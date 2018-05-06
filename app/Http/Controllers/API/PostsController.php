<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Global variables available to methods in this class definition.
     * 
     * @var array
     */
    private $start_date;

    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'create', 'show']);
    }

    /**
     * Lists the persisted data for this resource.
     * 
     * @return array
     */
    public function index()
    {
        $items = Post::all();

        return response()->json($items, 200);
    }

    /**
     * Persists the information the form.
     * 
     * @return array
     */
    public function create(Request $request)
    {
        Post::create($request->all());

        return response()->json(['data' => 'Resource created.'], 201);
    }

    /**
     * Gets a particular resource by $id.
     * 
     * @return array
     */
    public function show($id)
    {
        $item = Post::find($id);

        return response()->json($item, 200);
    }
}
