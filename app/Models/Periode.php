<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'periode',
        'status',
    ];

    /**
     * Get the mahasiswas associated with this period.
     */
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    /**
     * Get the kelompoks associated with this period.
     */
    public function kelompoks()
    {
        return $this->hasMany(Kelompok::class);
    }
}
