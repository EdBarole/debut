<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $brands = Brand::all();

        return view('console.brands.index')->with('brands', $brands);
    }

    public function create()
    {
        return view('console.brands.add');
    }

    public function store(Request $request)
    {
        Brand::create($request->all());

        return redirect('admin/brands');
    }
}
