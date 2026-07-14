<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'periode_id',
        'nama_kelompok',
        'instansi',
        'alamat_instansi',
        'desa',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'status',
    ];

    /**
     * Get the periode associated with the Kelompok.
     */
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    /**
     * Get the mahasiswas associated with the Kelompok.
     */
    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_kelompoks')
                    ->withPivot('role')
                    ->withTimestamps();
    }

    /**
     * Get the dosens associated with the Kelompok.
     */
    public function dosens()
    {
        return $this->belongsToMany(Dosen::class, 'pembimbing_kelompoks')
                    ->withPivot('status')
                    ->withTimestamps();
    }
}
