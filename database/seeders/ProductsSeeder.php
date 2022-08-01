<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'name' => 'Sendal jepit',
            'price' => '50000'
        ]);
        Products::create([
            'name' => 'Baju putih',
            'price' => '50000'
        ]);
    }
}
