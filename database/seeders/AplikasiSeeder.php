<?php

namespace Database\Seeders;

use App\Models\Aplikasi;
use Illuminate\Database\Seeder;

class AplikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menuSigarang = [
            [
                'icon' => 'icon-mat-dashboard',
                'link' => 'sigarang/dashboard',
                'nama' => 'Dashboard',
                'name' => 'sigarang.dashboard',
                'submenus' => []
            ],
            [
                'icon' => 'icon-mat-sync_alt',
                'link' => 'sigarang/transaksi',
                'nama' => 'Transaksi',
                'name' => 'sigarang.transaksi',
                'submenus' => [
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/pemesanan/TRP-',
                        'nama' => 'Transaksi Pemesanan',
                        'name' => 'sigarang.transaksi.pemesanan'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/penerimaan/TRM-',
                        'nama' => 'Transaksi Penerimaan',
                        'name' => 'sigarang.transaksi.penerimaan'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/distribusidepo',
                        'nama' => 'Transaksi Distribusi Depo',
                        'name' => 'sigarang.transaksi.distribusidepo'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/penerimaandepo',
                        'nama' => 'Transaksi Penerimaan Depo',
                        'name' => 'sigarang.transaksi.penerimaandepo'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/permintaan/TPN-',
                        'nama' => 'Transaksi Permintaan',
                        'name' => 'sigarang.transaksi.permintaan'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/verifpermintaan',
                        'nama' => 'Verif Transaksi Permintaan Ruangan',
                        'name' => 'sigarang.transaksi.verifpermintaan'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/distribusi',
                        'nama' => 'Transaksi Distribusi Permintaan Ruangan',
                        'name' => 'sigarang.transaksi.distribusi'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/penerimaanruangan',
                        'nama' => 'Transaksi Penerimaan Ruangan',
                        'name' => 'sigarang.transaksi.penerimaanruangan'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/pemakaianruangan',
                        'nama' => 'Transaksi Pemakaian Ruangan',
                        'name' => 'sigarang.transaksi.pemakaianruangan'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/barangrusak',
                        'nama' => 'Transaksi Barang Rusak',
                        'name' => 'sigarang.transaksi.barangrusak'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/transaksi/pengembalian',
                        'nama' => 'Transaksi Pengembalian',
                        'name' => 'sigarang.transaksi.pengembalian'
                    ]
                ]
            ],
            [
                'icon' => 'icon-mat-dataset',
                'link' => 'sigarang/master',
                'nama' => 'Master',
                'name' => 'sigarang.master',
                'submenus' => [
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/gedung',
                        'nama' => 'Master Gedung',
                        'name' => 'sigarang.master.gedung'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/gudang',
                        'nama' => 'Master Depo',
                        'name' => 'sigarang.master.gudang'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/minmaxstok',
                        'nama' => 'Master Min Max Stok',
                        'name' => 'sigarang.master.minmaxstok'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/ruang',
                        'nama' => 'Master Ruang',
                        'name' => 'sigarang.master.ruang'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/pengguna',
                        'nama' => 'Master Pengguna',
                        'name' => 'sigarang.master.pengguna'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/penggunaruang',
                        'nama' => 'Mapping Pengguna Ruang',
                        'name' => 'sigarang.master.penggunaruang'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/barang108',
                        'nama' => 'Master Barang 108',
                        'name' => 'sigarang.master.barang108'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/barangrs',
                        'nama' => 'Master Barang RS',
                        'name' => 'sigarang.master.barangrs'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/supplier',
                        'nama' => 'Master Supplier',
                        'name' => 'sigarang.master.supplier'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/satuan',
                        'nama' => 'Master Satuan',
                        'name' => 'sigarang.master.satuan'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/pegawai',
                        'nama' => 'Master Pegawai',
                        'name' => 'sigarang.master.pegawai'
                    ],
                    [
                        'icon' => null,
                        'link' => 'sigarang/master/kontrakpengerjaan',
                        'nama' => 'Master Kontrak Pengerjaan',
                        'name' => 'sigarang.master.kontrakpengerjaan'
                    ]
                ]
            ],
            [
                'icon' => 'icon-mat-history',
                'link' => 'sigarang/history',
                'nama' => 'History',
                'name' => 'sigarang.history',
                'submenus' => [
                    [
                        'icon' => 'icon-mat-inventory_2',
                        'link' => 'sigarang/history',
                        'nama' => 'Pemesanan',
                        'name' => 'sigarang.history.pemesanan'
                    ],
                    [
                        'icon' => 'icon-mat-shopping_bag',
                        'link' => 'sigarang/history',
                        'nama' => 'Penerimaan',
                        'name' => 'sigarang.history.penerimaan'
                    ],
                    [
                        'icon' => 'icon-mat-account_balance_wallet',
                        'link' => 'sigarang/history',
                        'nama' => 'Permintaan Ruangan',
                        'name' => 'sigarang.history.permintaan'
                    ],
                    [
                        'icon' => 'icon-mat-account_balance_wallet',
                        'link' => 'sigarang/history',
                        'nama' => 'Distribusi Depo',
                        'name' => 'sigarang.history.distribusidepo'
                    ],
                    [
                        'icon' => 'icon-mat-account_balance_wallet',
                        'link' => 'sigarang/history',
                        'nama' => 'Pemakaian Ruangan',
                        'name' => 'sigarang.history.pemakaianruangan'
                    ],
                    [
                        'icon' => 'icon-mat-account_balance_wallet',
                        'link' => 'sigarang/history',
                        'nama' => 'Penerimaan Ruangan',
                        'name' => 'sigarang.history.penerimaanruangan'
                    ],
                    [
                        'icon' => 'icon-mat-account_balance_wallet',
                        'link' => 'sigarang/history',
                        'nama' => 'Gudang',
                        'name' => 'sigarang.history.gudang'
                    ],
                    [
                        'icon' => 'icon-mat-account_balance_wallet',
                        'link' => 'sigarang/history',
                        'nama' => 'Retur',
                        'name' => 'sigarang.history.retur'
                    ]
                ]
            ],
            [
                'icon' => 'icon-mat-description',
                'link' => 'sigarang/laporan',
                'nama' => 'Laporan',
                'name' => 'sigarang.laporan',
                'submenus' => [
                    [
                        'icon' => null,
                        'link' => 'sigarang/laporan/stok',
                        'nama' => 'Laporan Stock',
                        'name' => 'sigarang.laporan.stok'
                    ]
                ]
            ]
        ];
        $menuPegawai = [
            [
                'nama' => 'Master',
                'name' => 'pegawai.master',
                'icon' => 'icon-mat-dataset',
                'link' => 'pegawai/absensi',
                'submenus' => [
                    [
                        'nama' => 'Cuti',
                        'name' => 'pegawai.master.cuti',
                        'icon' => 'icon-mat-dataset',
                        'link' => 'pegawai/master/cuti'
                    ],
                    [
                        'nama' => 'Kategori Jadwal',
                        'name' => 'pegawai.master.kategori',
                        'icon' => 'icon-mat-fingerprint',
                        'link' => 'pegawai/master/kategori'
                    ],
                    [
                        'nama' => 'Libur Nasional',
                        'name' => 'pegawai.master.prota',
                        'icon' => 'icon-mat-fingerprint',
                        'link' => 'pegawai/master/prota'
                    ]
                ]
            ],
            [
                'nama' => 'User',
                'name' => 'pegawai.user',
                'icon' => 'icon-mat-group',
                'link' => 'pegawai/user',
                'submenus' => [
                    [
                        'nama' => 'List User',
                        'name' => 'pegawai.user.list',
                        'icon' => 'icon-mat-dataset',
                        'link' => 'pegawai/user/list'
                    ],
                    [
                        'nama' => 'Tidak Masuk',
                        'name' => 'pegawai.user.libur',
                        'icon' => 'icon-mat-dataset',
                        'link' => 'pegawai/user/libur'
                    ],
                    [
                        'nama' => 'Rekap Absen',
                        'name' => 'pegawai.user.rekapabsen',
                        'icon' => 'icon-mat-dataset',
                        'link' => 'pegawai/user/rekapabsen'
                    ]
                ]
            ]
        ];
        $sigarang = Aplikasi::create([
            'nama' => 'Sigarang',
            'aplikasi' => 'sigarang'
        ]);
        $pegawai = Aplikasi::create([
            'nama' => 'Pegawai',
            'aplikasi' => 'pegawai'
        ]);

        // $menuSigarang = $sigarang->menus()->create();
        foreach ($menuSigarang as $key) {
            $menu = $sigarang->menus()->create([
                'nama' => $key['nama'],
                'name' => $key['name'],
                'icon' => $key['icon'],
                'link' => $key['link'],
            ]);
            foreach ($key['submenus'] as $var) {
                $menu->submenus()->create([
                    'nama' => $var['nama'],
                    'name' => $var['name'],
                    'icon' => $var['icon'],
                    'link' => $var['link'],

                ]);
            }
        }
        foreach ($menuPegawai as $key) {
            $menu = $pegawai->menus()->create([
                'nama' => $key['nama'],
                'name' => $key['name'],
                'icon' => $key['icon'],
                'link' => $key['link'],
            ]);
            foreach ($key['submenus'] as $var) {
                $menu->submenus()->create([
                    'nama' => $var['nama'],
                    'name' => $var['name'],
                    'icon' => $var['icon'],
                    'link' => $var['link'],

                ]);
            }
        }
    }
}
