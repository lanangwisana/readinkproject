<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class novel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'novel';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'judul',
        'sinopsis',
        'genre',
        'tokohUtama',
        'tglrilis',
        'penulis'
    ];
}
