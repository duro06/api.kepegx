<?php

namespace Database\Seeders;

use App\Models\Access;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Database\Seeder;

class AksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $mapingMenu = [
            [
                'role' => 1,
            ],
            [
                'role' => 2,
                'aplikasi_id' =>  1,
                'submenu' => [1,  24]
            ],
            [
                'role' => 3,
                'aplikasi_id' =>  1,
                'submenu' => [2,  3,  27,  31]
            ],
            [
                'role' => 4,
                'aplikasi_id' =>  1,
                'submenu' => [4,  6,  7,  27,  29]
            ],
            [
                'role' => 5,
                'aplikasi_id' =>  1,
                'submenu' => [5,  8,  9,  10]
            ],
            [
                'role' => 6,
                'aplikasi_id' => 2,
            ],
        ];

        foreach ($mapingMenu as $key) {
            if ($key['role'] === 1) {
                $submenu = Submenu::get();
                foreach ($submenu as $sub) {
                    $menu = Menu::find($sub->menu_id);
                    Access::create([
                        'role_id' => 1,
                        'aplikasi_id' => $menu->aplikasi_id,
                        'submenu_id' => $sub->id,
                    ]);
                }
            } else if ($key['role'] === 6) {
                $submenu = Submenu::where('menu_id', 6)->orWhere('menu_id', 7)->get();
                foreach ($submenu as $sub) {
                    Access::create([
                        'role_id' => 6,
                        'aplikasi_id' => 2,
                        'submenu_id' => $sub->id,
                    ]);
                }
            } else {
                foreach ($key['submenu'] as $sub) {
                    Access::create([
                        'role_id' => $key['role'],
                        'aplikasi_id' => $key['aplikasi_id'],
                        'submenu_id' => $sub,
                    ]);
                }
            }
        }
    }
}
