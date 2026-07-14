<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'periode_id',
        'nim',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'prodi',
        'no_hp',
        'status',
    ];

    /**
     * Get the user that owns the Mahasiswa.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the periode associated with the Mahasiswa.
     */
    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    /**
     * Get the kelompoks associated with the Mahasiswa.
     */
    public function kelompoks()
    {
        return $this->belongsToMany(Kelompok::class, 'mahasiswa_kelompoks')
                    ->withPivot('role')
                    ->withTimestamps();
    }
}
