<?php

namespace Database\Seeders;

use App\Models\Dakot12Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Dakot12Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('dakot_12')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $harga_12 = [
            [
                // 'nama' => 'All NEW AVANZA',
                'jam' => 12,
                'harga_12' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'All NEW AVANZA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'All NEW XENIA',
                'jam' => 12,
                'harga_12' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'All NEW XENIA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'AVANZA',
                'jam' => 12,
                'harga_12' => 500000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'AVANZA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XENIA',
                'jam' => 12,
                'harga_12' => 500000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'XENIA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'INNOVA REBORN',
                'jam' => 12,
                'harga_12' => 800000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'INNOVA REBORN,HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'EXPANDER',
                'jam' => 12,
                'harga_12' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'EXPANDER,HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ERTIGA',
                'jam' => 12,
                'harga_12' => 500000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'ERTIGA, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XL 7',
                'jam' => 12,
                'harga_12' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'XL 7, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ALL NEW RUSH & TERIOS',
                'jam' => 12,
                'harga_12' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'ALL NEW RUSH & TERIOS, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'HIACE COMMUTER',
                'jam' => 12,
                'harga_12' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'HIACE COMMUTER, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'ALPHARD',
                'jam' => 12,
                'harga_12' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'ALPHARD, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'PAJERO',
                'jam' => 12,
                'harga_12' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'PAJERO, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'FORTUNER',
                'jam' => 12,
                'harga_12' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'FORTUNER, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'WULING CORTEZ',
                'jam' => 12,
                'harga_12' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'WULING CORTEZ, HARGA PAKET RENTAL 12 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
        ];

        foreach ($harga_12 as $key => $value) {
            Dakot12Model::create($value);
        }
    }
}
