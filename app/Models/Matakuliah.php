<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Matakuliah extends Model
{
    protected $table = 'matakuliahs';
    protected $primaryKey = 'id_matakuliah';
    protected $fillable = [
        'nama_matakuliah', 
        'sks', 
        'id_jurusan'
    ];

    public function detail_jurusan() {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id_jurusan');
    }
}
