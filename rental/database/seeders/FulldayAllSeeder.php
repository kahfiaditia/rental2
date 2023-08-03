<?php

namespace Database\Seeders;

use App\Models\FullDayAllModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FulldayAllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('full_day_models')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $fulldayall = [
            [
                // 'nama' => 'All NEW AVANZA',
                'jam' => 24,
                'harga_full' => 1000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'All NEW AVANZA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'All NEW XENIA',
                'jam' => 24,
                'harga_full' => 1000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'All NEW XENIA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'AVANZA',
                'jam' => 24,
                'harga_full' => 900000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'AVANZA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XENIA',
                'jam' => 24,
                'harga_full' => 900000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'XENIA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'INNOVA REBORN',
                'jam' => 24,
                'harga_full' => 1400000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'INNOVA REBORN,HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'EXPANDER',
                'jam' => 24,
                'harga_full' => 1000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'EXPANDER,HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ERTIGA',
                'jam' => 24,
                'harga_full' => 900000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'ERTIGA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XL 7',
                'jam' => 24,
                'harga_full' => 1000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'XL 7, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ALL NEW RUSH & TERIOS',
                'jam' => 24,
                'harga_full' => 1000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'ALL NEW RUSH & TERIOS, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'HIACE COMMUTER',
                'jam' => 24,
                'harga_full' => 1600000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'HIACE COMMUTER, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'HIACE PREMIO',
                'jam' => 24,
                'harga_full' => 2000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'HIACE premio, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'ALPHARD',
                'jam' => 24,
                'harga_full' => 3000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'ALPHARD, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'PAJERO',
                'jam' => 24,
                'harga_full' => 2000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'PAJERO, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'FORTUNER',
                'jam' => 24,
                'harga_full' => 2000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'FORTUNER, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'WULING CORTEZ',
                'jam' => 24,
                'harga_full' => 1000000,
                'tol' => 'TERMASUK OPERASIONAL',
                'parkir' => 'TERMASUK OPERASIONAL',
                'driver' => 'DRIVER TERMASUK OPERASIONAL',
                'deskripsi' => 'WULING CORTEZ, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER TERMASUK OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
        ];

        foreach ($fulldayall as $key => $value) {
            FullDayAllModel::create($value);
        }
    }
}
