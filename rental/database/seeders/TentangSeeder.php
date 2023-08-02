<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TentangModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TentangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tentang_models')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $tentang = [
            [
                'nama' => 'Admin',
                'email1' => 'majuberkah@gmail.com',
                'telp1' => '081398604136',
            ],
        ];

        foreach ($tentang as $key => $value) {
            TentangModel::create($value);
        }
    }
}
