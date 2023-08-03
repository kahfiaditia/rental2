<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FullDayAllModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "full_day_all_models";

    public function mobil4()
    {
        return $this->belongsTo(DaftarMobilModel::class, 'id_mobil');
    }
}
