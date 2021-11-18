<?php

use Illuminate\Database\Seeder;
use App\Laravel\Models\IdType;
use Illuminate\Support\Str;
class IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('id_type')->insert([

            [
                'name' => 'SSS',
                'code' => time()."-".Str::uuid()->toString(),
             
            ],
            [
                'name' => 'PAGIBIG',
                'code' => time()."-".Str::uuid()->toString(),
              
            ],
            [
                'name' => 'PASSPORT',
                'code' => time()."-".Str::uuid()->toString(),

            ],
            [
                'name' => 'LICENSE ID',
                'code' => time()."-".Str::uuid()->toString(),

            ],

        ]);
        
    }
}
