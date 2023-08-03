<?php

namespace Database\Seeders;

use App\Models\DaftarMobilModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('baru_daftar_mobil')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $baru_daftar_mobil = [
            [
                'nama' => 'All NEW AVANZA',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'All NEW XENIA',
                'image' => '',
                'merk' => 'Daihatsu',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'AVANZA',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'XENIA',
                'image' => '',
                'merk' => 'Daihatsu',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'WULING CORTEZ',
                'image' => '',
                'merk' => 'Wuling',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'INNOVA REBORN',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'EXPANDER',
                'image' => '',
                'merk' => 'Mitsubishi',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'ERTIGA',
                'image' => '',
                'merk' => 'Suzuki',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'XL 7',
                'image' => '',
                'merk' => 'Suzuki',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'ALL NEW RUSH & TERIOS',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'HIACE COMMUTER',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'HIACE PREMIO',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'ALPHARD',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'PAJERO',
                'image' => '',
                'merk' => 'Mitsubishi',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
            [
                'nama' => 'FORTUNER',
                'image' => '',
                'merk' => 'Toyota',
                'model' => '',
                'layanan' => '',
                'deskripsi' => 'Mobil ini tersedia Matic dan Manual',
                'aktif' => '1',
            ],
        ];

        foreach ($baru_daftar_mobil as $key => $value) {
            DaftarMobilModel::create($value);
        }
    }
}
