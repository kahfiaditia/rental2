<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dakot12JamAllin extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "dakot12_jam_allins";

    public function mobil2()
    {
        return $this->belongsTo(DaftarMobilModel::class, 'id_mobil');
    }
}
