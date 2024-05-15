<?php

namespace Database\Seeders;

use App\Models\Pasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('pasta.pasta');

        foreach ($products as $product) {
            $pasta = new Pasta();
            $pasta->src = $product['src'];
            $pasta->title = $product['titolo'];
            $pasta->type = $product['tipo'];
            $pasta->cooking_time = $product['cottura'];
            $pasta->weight = $product['peso'];
            $pasta->description = $product['descrizione'];
            $pasta->save();
        }
    }
}
