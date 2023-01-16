<?php

namespace Database\Seeders;

use App\Models\Submenu;
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
        $this->call([
            // HariSeeder::class,
            // JamSeeder::class,
            // KategorySeeder::class,
            // MenuSeeder::class,
            // SubmenuSeeder::class,
            // UserSeeder::class,
            // AplikasiSeeder::class,
            // RoleSeeder::class,
            // AksesSeeder::class,
        ]);
    }
}
