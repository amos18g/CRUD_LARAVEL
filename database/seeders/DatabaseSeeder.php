<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
 
        //crear un admin de manera automatica
        $user = new User;
        $user ->name = 'Admin';
        $user ->role = 'admin';
        $user ->email = 'admin@test.com';
        $user -> password = '1234';

        $user -> save();
    }
}
