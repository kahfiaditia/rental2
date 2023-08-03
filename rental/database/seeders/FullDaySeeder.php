<?php

namespace Database\Seeders;

use App\Models\FullDayModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FullDaySeeder extends Seeder
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
        $fullday = [
            [
                // 'nama' => 'All NEW AVANZA',
                'jam' => 24,
                'harga_full' => 700000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'All NEW AVANZA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'All NEW XENIA',
                'jam' => 24,
                'harga_full' => 700000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'All NEW XENIA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'AVANZA',
                'jam' => 24,
                'harga_full' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'AVANZA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XENIA',
                'jam' => 24,
                'harga_full' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'XENIA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'INNOVA REBORN',
                'jam' => 24,
                'harga_full' => 1000000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'INNOVA REBORN,HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'EXPANDER',
                'jam' => 24,
                'harga_full' => 700000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'EXPANDER,HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ERTIGA',
                'jam' => 24,
                'harga_full' => 600000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'ERTIGA, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'XL 7',
                'jam' => 24,
                'harga_full' => 700000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'XL 7, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'ALL NEW RUSH & TERIOS',
                'jam' => 24,
                'harga_full' => 700000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'ALL NEW RUSH & TERIOS, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
            [
                // 'nama' => 'HIACE COMMUTER',
                'jam' => 24,
                'harga_full' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'HIACE COMMUTER, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'HIACE PREMIO',
                'jam' => 24,
                'harga_full' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'HIACE premio, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'ALPHARD',
                'jam' => 24,
                'harga_full' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'ALPHARD, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'PAJERO',
                'jam' => 24,
                'harga_full' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'PAJERO, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'FORTUNER',
                'jam' => 24,
                'harga_full' => 0,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'FORTUNER, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '0',
            ],
            [
                // 'nama' => 'WULING CORTEZ',
                'jam' => 24,
                'harga_full' => 700000,
                'tol' => 'DILUAR OPERASIONAL',
                'parkir' => 'DILUAR OPERASIONAL',
                'driver' => 'DRIVER DILUAR OPERASIONAL',
                'deskripsi' => 'WULING CORTEZ, HARGA PAKET RENTAL 24 JAM MOBIL + DRIVER DILUAR OPERASIONAL (DALKOT)',
                'aktif' => '1',
            ],
        ];

        foreach ($fullday as $key => $value) {
            FullDayModel::create($value);
        }
    }
}
