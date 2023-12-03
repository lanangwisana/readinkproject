<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class penulis extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'penulis';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'email',
        'username',
        'password',
        'tanggalbergabung'
    ];
}
