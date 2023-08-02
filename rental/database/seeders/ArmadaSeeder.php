<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArmadaModel;
use Illuminate\Support\Facades\DB;

class ArmadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('armada')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $armada = [
            [
                'merk' => 'All NEW AVANZA',
                'layanan' => '',
                'harga_12' => 500000,
                'harga_12_all' => 800000,
                'harga_full' => 700000,
                'harga_full_all' => 1000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'All NEW XENIA',
                'layanan' => '',
                'harga_12' => 500000,
                'harga_12_all' => 800000,
                'harga_full' => 700000,
                'harga_full_all' => 1000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'INNOVA REBORN',
                'layanan' => '',
                'harga_12' => 800000,
                'harga_12_all' => 1200000,
                'harga_full' => 1000000,
                'harga_full_all' => 1400000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'EXPANDER',
                'layanan' => '',
                'harga_12' => 600000,
                'harga_12_all' => 800000,
                'harga_full' => 700000,
                'harga_full_all' => 1000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'ERTIGA',
                'layanan' => '',
                'harga_12' => 500000,
                'harga_12_all' => 700000,
                'harga_full' => 600000,
                'harga_full_all' => 900000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'XL 7',
                'layanan' => '',
                'harga_12' => 600000,
                'harga_12_all' => 800000,
                'harga_full' => 700000,
                'harga_full_all' => 1000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'ALL NEW RUSH & TERIOS',
                'layanan' => '',
                'harga_12' => 600000,
                'harga_12_all' => 800000,
                'harga_full' => 700000,
                'harga_full_all' => 1000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'HIACE COMMUTER',
                'layanan' => '',
                'harga_12' => 1,
                'harga_12_all' => 1300000,
                'harga_full' => 1,
                'harga_full_all' => 1600000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'ALPHARD',
                'layanan' => '',
                'harga_12' => 1,
                'harga_12_all' => 2800000,
                'harga_full' => 1,
                'harga_full_all' => 3000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'PAJERO',
                'layanan' => '',
                'harga_12' => 1,
                'harga_12_all' => 1800000,
                'harga_full' => 1,
                'harga_full_all' => 2000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
            [
                'merk' => 'FORTUNER',
                'layanan' => '',
                'harga_12' => 1,
                'harga_12_all' => 1800000,
                'harga_full' => 1,
                'harga_full_all' => 2000000,
                'tagline1' => 'Bersih',
                'tagline2' => 'Profesional',
                'fitur1' => 'Toll',
                'fitur2' => 'Parkir',
                'aktif' => '1',
            ],
        ];

        foreach ($armada as $key => $value) {
            ArmadaModel::create($value);
        }
    }
}
