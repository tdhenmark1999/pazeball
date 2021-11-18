<?php

use Illuminate\Database\Seeder;
use App\Laravel\Models\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $path = $path = storage_path() ."/city.json";
            $cities =  json_decode(file_get_contents($path), true);
            City::truncate();
            foreach ($cities as $city) {

                $p = new City;
                $p->citymun_code = $city['citymun_code'];
                $p->citymun_desc = $city['citymun_desc'];
                $p->prov_code = $city['prov_code'];
                $p->reg_desc = $city['reg_desc'];
                $p->save();

        } 
        }
}
