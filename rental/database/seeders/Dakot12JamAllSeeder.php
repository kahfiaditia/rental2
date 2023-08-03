<?php

namespace Database\Seeders;

use App\Models\Dakot12JamAllin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Dakot12JamAllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('dakot12_jam_allins')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $harga_12ALL = [
            [
                // 'nama' => 'All NEW AVANZA',
                'jam' => 12,
                'harga_12' => 800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'All NEW AVANZA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'All NEW XENIA',
                'jam' => 12,
                'harga_12' => 800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'All NEW XENIA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'AVANZA',
                'jam' => 12,
                'harga_12' => 700000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'AVANZA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XENIA',
                'jam' => 12,
                'harga_12' => 700000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'XENIA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'INNOVA REBORN',
                'jam' => 12,
                'harga_12' => 1200000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'INNOVA REBORN,HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'EXPANDER',
                'jam' => 12,
                'harga_12' => 800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'EXPANDER,HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ERTIGA',
                'jam' => 12,
                'harga_12' => 700000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'ERTIGA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XL 7',
                'jam' => 12,
                'harga_12' => 800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'XL 7, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ALL NEW RUSH & TERIOS',
                'jam' => 12,
                'harga_12' => 800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'ALL NEW RUSH & TERIOS, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'HIACE COMMUTER',
                'jam' => 12,
                'harga_12' => 1300000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'HIACE COMMUTER, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'HIACE PREMIO',
                'jam' => 12,
                'harga_12' => 1600000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'HIACE premio, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'ALPHARD',
                'jam' => 12,
                'harga_12' => 2800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'ALPHARD, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'PAJERO',
                'jam' => 12,
                'harga_12' => 1800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'PAJERO, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'FORTUNER',
                'jam' => 12,
                'harga_12' => 1800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'FORTUNER, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'WULING CORTEZ',
                'jam' => 12,
                'harga_12' => 800000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'WULING CORTEZ, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
        ];

        foreach ($harga_12ALL as $key => $value) {
            Dakot12JamAllin::create($value);
        }
    }
}
