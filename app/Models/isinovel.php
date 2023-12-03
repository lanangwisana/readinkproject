<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class isinovel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'isinovel';
    protected $primaryKey = '';
    protected $fillable =
    [
        'judul',
        'isinovel',
    ];

}
