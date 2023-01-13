<?php

namespace Database\Seeders;

use App\Models\Kategory;
use Illuminate\Database\Seeder;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategory::create([
            'nama' => '5 hari kerja',
            'masuk' => '07:30',
            'pulang' => '16:00',
            'jam' => 39,
            'menit' => 30,
        ]);
        Kategory::create([
            'nama' => '6 hari kerja',
            'masuk' => '07:30',
            'pulang' => '14:00',
            'jam' => 38,
            'menit' => 0,
        ]);
        Kategory::create([
            'nama' => 'Shift Pagi',
            'masuk' => '07:00',
            'pulang' => '14:00',
            'jam' => 35,
            'menit' => 0,
        ]);
        Kategory::create([
            'nama' => 'Shift Siang',
            'masuk' => '14:00',
            'pulang' => '22:00',
            'jam' => 35,
            'menit' => 0,
        ]);
        Kategory::create([
            'nama' => 'Shift Malam',
            'masuk' => '22:00',
            'pulang' => '07:00',
            'jam' => 35,
            'menit' => 0,
        ]);
        Kategory::create([
            'nama' => 'Shift Subuh',
            'masuk' => '03:00',
            'pulang' => '10:00',
            'jam' => 35,
            'menit' => 0,
        ]);
        // Kategory::create([
        //     'nama' => '5 hari kerja',
        //     'hari_01' => 1,
        //     'hari_02' => 2,
        //     'hari_03' => 3,
        //     'hari_04' => 4,
        //     'hari_05' => 5,
        //     'jam_01' => 1,
        //     'jam_02' => 2,
        // ]);
        // Kategory::create([
        //     'nama' => '6 hari kerja',
        //     'hari_01' => 1,
        //     'hari_02' => 2,
        //     'hari_03' => 3,
        //     'hari_04' => 4,
        //     'hari_05' => 5,
        //     'hari_06' => 6,
        //     'jam_01' => 3,

        // ]);

        // // shif mulai senin
        // Kategory::create([
        //     'nama' => 'Shif Pagi',
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang',
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam',
        //     'jam_01' => 5,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif subuh',
        //     'jam_01' => 6,
        // ]);

        // Kategory::create([
        //     'nama' => 'Shif Pagi 1',
        //     'hari_01' => 1,
        //     'hari_02' => 2,
        //     'hari_03' => 3,
        //     'hari_04' => 4,
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang 1',
        //     'hari_01' => 1,
        //     'hari_02' => 2,
        //     'hari_03' => 3,
        //     'hari_04' => 4,
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam 1',
        //     'hari_01' => 1,
        //     'hari_02' => 2,
        //     'hari_03' => 3,
        //     'hari_04' => 4,
        //     'jam_01' => 5,
        // ]);

        // // shif mulai selasa
        // Kategory::create([
        //     'nama' => 'Shif Pagi 2',
        //     'hari_01' => 2,
        //     'hari_02' => 3,
        //     'hari_03' => 4,
        //     'hari_04' => 5,
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang 2',
        //     'hari_01' => 2,
        //     'hari_02' => 3,
        //     'hari_03' => 4,
        //     'hari_04' => 5,
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam 2',
        //     'hari_01' => 2,
        //     'hari_02' => 3,
        //     'hari_03' => 4,
        //     'hari_04' => 5,
        //     'jam_01' => 5,
        // ]);

        // // shif mulai Rabu
        // Kategory::create([
        //     'nama' => 'Shif Pagi 3',
        //     'hari_01' => 3,
        //     'hari_02' => 4,
        //     'hari_03' => 5,
        //     'hari_04' => 6,
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang 3',
        //     'hari_01' => 3,
        //     'hari_02' => 4,
        //     'hari_03' => 5,
        //     'hari_04' => 6,
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam 3',
        //     'hari_01' => 3,
        //     'hari_02' => 4,
        //     'hari_03' => 5,
        //     'hari_04' => 6,
        //     'jam_01' => 5,
        // ]);

        // // shif mulai kamis
        // Kategory::create([
        //     'nama' => 'Shif Pagi 4',
        //     'hari_01' => 4,
        //     'hari_02' => 5,
        //     'hari_03' => 6,
        //     'hari_04' => 7,
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang 4',
        //     'hari_01' => 4,
        //     'hari_02' => 5,
        //     'hari_03' => 6,
        //     'hari_04' => 7,
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam 4',
        //     'hari_01' => 4,
        //     'hari_02' => 5,
        //     'hari_03' => 6,
        //     'hari_04' => 7,
        //     'jam_01' => 5,
        // ]);

        // // shif mulai jumat
        // Kategory::create([
        //     'nama' => 'Shif Pagi 5',
        //     'hari_01' => 5,
        //     'hari_02' => 6,
        //     'hari_03' => 7,
        //     'hari_04' => 1,
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang 5',
        //     'hari_01' => 5,
        //     'hari_02' => 6,
        //     'hari_03' => 7,
        //     'hari_04' => 1,
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam 5',
        //     'hari_01' => 5,
        //     'hari_02' => 6,
        //     'hari_03' => 7,
        //     'hari_04' => 1,
        //     'jam_01' => 5,
        // ]);

        // // shif mulai sabtu
        // Kategory::create([
        //     'nama' => 'Shif Pagi 6',
        //     'hari_01' => 6,
        //     'hari_02' => 7,
        //     'hari_03' => 1,
        //     'hari_04' => 2,
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang 6',
        //     'hari_01' => 6,
        //     'hari_02' => 7,
        //     'hari_03' => 1,
        //     'hari_04' => 2,
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam 6',
        //     'hari_01' => 6,
        //     'hari_02' => 7,
        //     'hari_03' => 1,
        //     'hari_04' => 2,
        //     'jam_01' => 5,
        // ]);

        // // shif mulai minggu
        // Kategory::create([
        //     'nama' => 'Shif Pagi 7',
        //     'hari_01' => 7,
        //     'hari_02' => 1,
        //     'hari_03' => 2,
        //     'hari_04' => 3,
        //     'jam_01' => 3,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif Siang 7',
        //     'hari_01' => 7,
        //     'hari_02' => 1,
        //     'hari_03' => 2,
        //     'hari_04' => 3,
        //     'jam_01' => 4,
        // ]);
        // Kategory::create([
        //     'nama' => 'Shif malam 7',
        //     'hari_01' => 7,
        //     'hari_02' => 1,
        //     'hari_03' => 2,
        //     'hari_04' => 3,
        //     'jam_01' => 5,
        // ]);
    }
}
