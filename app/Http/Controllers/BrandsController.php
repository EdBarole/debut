<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
    /**
     * Share hard coded values until php7-pgsql module is installed
     * 
     * @var array
     */
    private $brands;

    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->brands = collect([]);

        $this->brands->push(['title' => 'Blue Chips', 'price' => 102, 'amount_invested' => 103.99, 'purchases' => false]);
        $this->brands->push(['title' => 'Delicious Dividends', 'price' => 50, 'amount_invested' => 51.89, 'purchases' => false]);
        $this->brands->push(['title' => 'Roll with Buffet', 'price' => 45, 'amount_invested' => 51.53, 'purchases' => false]);
        $this->brands->push(['title' => 'Water the World', 'price' => 30, 'amount_invested' => 33.32, 'purchases' => false]);
        $this->brands->push(['title' => 'Aggressive Mix', 'price' => 25, 'amount_invested' => 25.52, 'purchases' => false]);
        $this->brands->push(['title' => 'Defending America', 'price' => 25, 'amount_invested' => 28.59, 'purchases' => false]);
        $this->brands->push(['title' => 'Moderate Mix', 'price' => 25, 'amount_invested' => 25.40, 'purchases' => false]);
        $this->brands->push(['title' => 'Robots Rising', 'price' => 25, 'amount_invested' => 29.35, 'purchases' => false]);
    }

    /**
     * Lists the persisted data for this resource.
     * 
     * @return array
     */
    public function index()
    {
        return response()->json($this->brands, 200);
    }
}
