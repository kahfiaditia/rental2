<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dakot12Model extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "dakot_12";

    public function mobil()
    {
        return $this->belongsTo(DaftarMobilModel::class, 'id_mobil');
    }
}
