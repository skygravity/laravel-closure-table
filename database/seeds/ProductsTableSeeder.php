<?php

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run product (Ford models) seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['product_name' => 'Aerostar'],
						['product_name' => 'Aspire'],
						['product_name' => 'Bax'],
						['product_name' => 'Bronco'],
						['product_name' => 'Cmax'],
						['product_name' => 'Capri'],
						['product_name' => 'Caravan'],
						['product_name' => 'Cargo'],
						['product_name' => 'ClubWagon'],
						['product_name' => 'ConnectTourneo'],
						['product_name' => 'Contour'],
						['product_name' => 'Cougar'],
						['product_name' => 'Courier'],
						['product_name' => 'CrownVictoria'],
						['product_name' => 'Econoline'],
						['product_name' => 'Econovan'],
						['product_name' => 'Edge'],
						['product_name' => 'Escape'],
						['product_name' => 'Escort'],
						['product_name' => 'Excursion'],
						['product_name' => 'Expedition'],
						['product_name' => 'Explorer'],
						['product_name' => 'Express'],
						['product_name' => 'F150'],
						['product_name' => 'F250'],
						['product_name' => 'F350'],
						['product_name' => 'F450'],
						['product_name' => 'F470'],
						['product_name' => 'F700'],
						['product_name' => 'Fairlane'],
						['product_name' => 'Falcon'],
						['product_name' => 'Fiesta'],
						['product_name' => 'FiveHundrer'],
						['product_name' => 'Flex'],
						['product_name' => 'Focus'],
						['product_name' => 'FocusCMAX'],
						['product_name' => 'Freestar'],
						['product_name' => 'Freestyle'],
						['product_name' => 'Fusion'],
						['product_name' => 'Galaxy'],
						['product_name' => 'Granada'],
						['product_name' => 'GrandCMAX'],
						['product_name' => 'GT'],
						['product_name' => 'Ka'],
						['product_name' => 'Kuga'],
						['product_name' => 'LTD'],
						['product_name' => 'Maverick'],
						['product_name' => 'Mercury'],
						['product_name' => 'Mondeo'],
						['product_name' => 'Mustang'],
						['product_name' => 'Orion'],
						['product_name' => 'Probe'],
						['product_name' => 'Puma'],
						['product_name' => 'Ranger'],
						['product_name' => 'SMAX'],
						['product_name' => 'Scorpio'],
						['product_name' => 'Sierra'],
						['product_name' => 'Sportka'],
						['product_name' => 'Streetka'],
						['product_name' => 'Superduty'],
						['product_name' => 'Taunus'],
						['product_name' => 'Taurus'],
						['product_name' => 'Tempo'],
						['product_name' => 'Thunderbird'],
						['product_name' => 'Tourneo'],
						['product_name' => 'Transit'],
						['product_name' => 'TransitConnect'],
						['product_name' => 'Windstar']
        ];
        foreach ($products as $product)
        Product::create($product);
    }
}



