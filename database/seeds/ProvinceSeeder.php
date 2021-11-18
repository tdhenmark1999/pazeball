<?php

use Illuminate\Database\Seeder;
use App\Laravel\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $path = $path = storage_path() ."/province.json";
            $provinces =  json_decode(file_get_contents($path), true);
            Province::truncate();
            foreach ($provinces as $province) {

                $p = new Province;
                $p->prov_code = $province['prov_code'];
                $p->prov_desc = $province['prov_desc'];
                $p->psgc_code = $province['psgc_code'];
                $p->reg_code = $province['reg_code'];
                $p->save();

       } 
    }
}
