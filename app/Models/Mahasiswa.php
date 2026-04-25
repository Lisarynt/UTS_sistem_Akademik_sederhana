<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = [
        'nim', 
        'nama', 
        'id_jurusan'
    ];

    public function detail_jurusan() {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id_jurusan');
    }
}
