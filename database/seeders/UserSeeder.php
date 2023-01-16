<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'nama' => 'rootsa',
                'username' => 'rootsa',
                'email' => 'rootsa@app.com',
                'password' => 'saroot12345',
                'role_id' => 1,
            ],
            [
                'nama' => 'pptk',
                'username' => 'pptk',
                'email' => 'pptk@app.com',
                'password' => 'pptk12345',
                'role_id' => 2,
            ],
            [
                'nama' => 'gudang',
                'username' => 'gudang',
                'email' => 'gudang@app.com',
                'password' => 'gudang12345',
                'role_id' => 3,
            ],
            [
                'nama' => 'depo',
                'username' => 'depo',
                'email' => 'depo@app.com',
                'password' => 'depo12345',
                'role_id' => 4,
            ],
            [
                'nama' => 'ruangan',
                'username' => 'ruangan',
                'email' => 'ruangan@app.com',
                'password' => 'ruangan12345',
                'role_id' => 5,
            ],
            [
                'nama' => 'admin pegawai',
                'username' => 'admin.pegawai',
                'email' => 'admin.pegawai@app.com',
                'password' => 'pegawai12345',
                'role_id' => 6,
            ],

        ];

        foreach ($users as $user) {
            User::create([
                'nama' => $user['nama'],
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
                'role_id' => $user['role_id'],
            ]);
        }
    }
}
