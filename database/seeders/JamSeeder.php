<?php

namespace Database\Seeders;

use App\Models\Jam;
use Illuminate\Database\Seeder;

class JamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jam::create([
            'masuk' => '07:30',
            'pulang' => '16:00',
        ]);
        Jam::create([
            'masuk' => '07:30',
            'pulang' => '13:00',
        ]);
        Jam::create([
            'masuk' => '07:30',
            'pulang' => '14:00',
        ]);
        Jam::create([
            'masuk' => '07:00',
            'pulang' => '14:00',
        ]);
        Jam::create([
            'masuk' => '14:00',
            'pulang' => '22:00',
        ]);
        Jam::create([
            'masuk' => '22:00',
            'pulang' => '07:00',
        ]);
        Jam::create([
            'masuk' => '03:00',
            'pulang' => '10:00',
        ]);
    }
}
