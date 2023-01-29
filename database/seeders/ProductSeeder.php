<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Pizza BBQ Chicken & Bacon',
                'price' => 13.49,
                'description' => 'lorem ipsum',
                'image' => 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PCNB/NL_PCNB_en_hero_9848.jpg?v-654914696'
            ],
            [
                'name' => 'CHICKEN KEBAB',
                'price' => 13.99,
                'description' => 'lorem ipsum',
                'image' => 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PKEB/NL_PKEB_all_hero_9068.jpg?v348136352'
            ],
            [
                'name' => 'Pizza Shawarma',
                'price' => 13.99,
                'description' => 'lorem ipsum',
                'image' => 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PSHO/NL_PSHO_all_hero_9068.jpg?v29382211'
            ],
            [
                'name' => 'PIZZA AMERICAN SUPREME MEATLOVER',
                'price' => 15.49,
                'description' => 'lorem ipsum',
                'image' => 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PMLS/NL_PMLS_all_hero_8743.jpg?v1000954861'
            ],
            [
                'name' => 'Pizza Americana',
                'price' => 12.99,
                'description' => 'lorem ipsum',
                'image' => 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PAME/NL_PAME_all_hero_7544.jpg?v979234471'
            ],
            [
                'name' => 'Pizza Ham',
                'price' => 9.49,
                'description' => 'lorem ipsum',
                'image' => 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PCRE/NL_PCRE_all_hero_8769.jpg?v356003748'
            ],
            [
                'name' => 'Pizza Four Cheese',
                'price' => 13.99,
                'description' => 'lorem ipsum',
                'image' => 'https://bestellen.dominos.nl/ManagedAssets/NL/product/PBRO/NL_PBRO_en_hero_9398.jpg?v79639921'
            ]

            
        ];
        Product::insert($products);
    }
    
}
