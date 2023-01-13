<?php

namespace Database\Seeders;

use App\Models\Hari;
use Illuminate\Database\Seeder;

class HariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hari::create([
            'nama' => 'Senin',
            'name' => 'Monday'
        ]);
        Hari::create([
            'nama' => 'Selasa',
            'name' => 'Tuesday'
        ]);
        Hari::create([
            'nama' => 'Rabu',
            'name' => 'Wednesday'
        ]);
        Hari::create([
            'nama' => 'Kamis',
            'name' => 'Thursday'
        ]);
        Hari::create([
            'nama' => 'Jumat',
            'name' => 'Friday'
        ]);
        Hari::create([
            'nama' => 'Sabtu',
            'name' => 'Saturday'
        ]);
        Hari::create([
            'nama' => 'Minggu',
            'name' => 'Sunday'
        ]);
    }
}
