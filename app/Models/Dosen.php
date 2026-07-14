<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'nip_ynaa',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_hp',
        'status',
    ];

    /**
     * Get the user that owns the Dosen.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the kelompoks associated with the Dosen.
     */
    public function kelompoks()
    {
        return $this->belongsToMany(Kelompok::class, 'pembimbing_kelompoks')
                    ->withPivot('status')
                    ->withTimestamps();
    }
}
