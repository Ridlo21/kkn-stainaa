<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembimbingKelompok extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pembimbing_kelompoks';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'dosen_id',
        'kelompok_id',
        'status',
    ];

    /**
     * Get the dosen associated with this relation.
     */
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    /**
     * Get the kelompok associated with this relation.
     */
    public function kelompok()
    {
        return $this->belongsTo(Kelompok::class);
    }
}
