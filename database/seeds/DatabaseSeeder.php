<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            $this->call(AdminAccountSeeder::class);
            $this->call(IdentitySeeder::class);
            $this->call(ProvinceSeeder::class);
            $this->call(CitySeeder::class);
            $this->call(CategorySeeder::class);
    }
}
