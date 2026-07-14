<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MahasiswaKelompok extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mahasiswa_kelompoks';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'mahasiswa_id',
        'kelompok_id',
        'role',
    ];

    /**
     * Get the mahasiswa associated with this relation.
     */
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    /**
     * Get the kelompok associated with this relation.
     */
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class);
    }
}
