<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'nama' => 'root'
        ]);
        Role::create([
            'nama' => 'PPTK'
        ]);
        Role::create([
            'nama' => 'gudang'
        ]);
        Role::create([
            'nama' => 'depo'
        ]);
        Role::create([
            'nama' => 'ruangan'
        ]);
        Role::create([
            'nama' => 'admin pegawai'
        ]);
    }
}
