<?php

use Illuminate\Database\Seeder;
use App\Laravel\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $path = $path = storage_path() ."/categories.json";
            $categories  =  json_decode(file_get_contents($path), true);
            Category::truncate();
            foreach ($categories as $category) {

                $p = new Category;
                $p->code = $category['code'];
                $p->description = "Description";
                $p->save();

        } 
    }
}
