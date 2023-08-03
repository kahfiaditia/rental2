<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FullDayModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "full_day_models";

    public function mobil3()
    {
        return $this->belongsTo(DaftarMobilModel::class, 'id_mobil');
    }
}
