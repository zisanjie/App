<?php

/*
 * This file is part of the Antvel App package.
 *
 * (c) Gustavo Ocanto <gustavoocanto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Seeder;
use Antvel\Product\Models\ProductFeatures;

class ProductsFeaturesTableSeeder extends Seeder
{
    public function run()
    {
        factory(ProductFeatures::class)->create([
            'name' => trans('globals.product_features.weight'),
            'help_message' => 'The item weight',
            'filterable' => true,
        ]);

        factory(ProductFeatures::class)->create([
            'name' => trans('globals.product_features.dimensions'),
            'help_message' => 'The item dimensions',
            'filterable' => true,
        ]);

        factory(ProductFeatures::class)->create([
            'name' => trans('globals.product_features.color'),
            'help_message' => 'The item color',
            'validation_rules' => 'required',
            'filterable' => true,
        ]);

        factory(ProductFeatures::class)->create([
            'name' => trans('globals.product_features.model')
        ]);
    }
}
