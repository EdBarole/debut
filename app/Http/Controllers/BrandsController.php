<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
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
        $items = Brand::all();

        return response()->json($items, 200);
    }

    /**
     * Persists the information the form.
     * 
     * @return array
     */
    public function create(Request $request)
    {
        Brand::create($request->all());

        return response()->json(['data' => 'Resource created.'], 201);
    }

    /**
     * Gets a particular resource by $id.
     * 
     * @return array
     */
    public function show($id)
    {
        $item = Brand::find($id);

        return response()->json($item, 200);
    }
}
