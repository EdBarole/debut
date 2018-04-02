<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::truncate();

        $brands = collect([]);

        $brands->push(['title' => 'Blue Chips', 'price' => 102, 'amount_invested' => 103.99, purchases => false]);
        $brands->push(['title' => 'Delicious Dividends', 'price' => 50, 'amount_invested' => 51.89, purchases => false]);
        $brands->push(['title' => 'Roll with Buffet', 'price' => 45, 'amount_invested' => 51.53, purchases => false]);
        $brands->push(['title' => 'Water the World', 'price' => 30, 'amount_invested' => 33.32, purchases => false]);
        $brands->push(['title' => 'Aggressive Mix', 'price' => 25, 'amount_invested' => 25.52, purchases => false]);
        $brands->push(['title' => 'Defending America', 'price' => 25, 'amount_invested' => 28.59, purchases => false]);
        $brands->push(['title' => 'Moderate Mix', 'price' => 25, 'amount_invested' => 25.40, purchases => false]);
        $brands->push(['title' => 'Robots Rising', 'price' => 25, 'amount_invested' => 29.35, purchases => false]);

        foreach ($brands as $brand)
        {
            Brand::create([
                'title' => $brand->title,
                'price' => $brand->price,
                'amount_invested' => $brand->amount_invested,
                'purchases' => false
            ]);
        }
    }
}
