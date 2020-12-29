<?php

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
        factory(Modules\Product\Entities\Product::class, 100)->create()->each( function($product) {
            $productDetail = factory(Modules\Product\Entities\ProductDetail::class, 1)->create([
                'product_id' => $product->id
            ]);
            $productImage = factory(Modules\Product\Entities\ImageProduct::class, 2)->create([
                'product_id' => $product->id
            ]);
        });
    }
}
