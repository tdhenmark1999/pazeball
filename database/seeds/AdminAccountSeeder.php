<?php

use App\Laravel\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrNew([
            'uuid' => Str::uuid()->toString(), 
            'first_name' => "Juan", 
            'last_name' => "Dela cruz", 
            'status' => 'active',
            'email' => "admin@gmail.com", 
            'username' => "master_admin",
            'points' => "200",
            'type' => "super_user",
        ]);

        $user->password = bcrypt("admin");
        $user->save();

        $user = User::firstOrNew([
            'uuid' => Str::uuid()->toString(), 
            'first_name' => "Juan", 
            'last_name' => "Dela cruz", 
            'status' => 'active',
            'email' => "pazer@gmail.com", 
            'username' => "master_admin",
            'points' => "200",
            'type' => "pazer",
        ]);
        
        $user->password = bcrypt("pazer");
        $user->save();

        $user = User::firstOrNew([
            'uuid' => Str::uuid()->toString(), 
            'first_name' => "Paze Pro", 
            'last_name' => "Dela cruz", 
            'status' => 'active',
            'email' => "pazepro@gmail.com", 
            'username' => "pazepro",
            'status' => "active",
            'points' => "200",
            'type' => "pazer",
            'is_pazepro' => "true",
        ]);
        
        $user->password = bcrypt("pazepro");
        $user->save();
    }
}
