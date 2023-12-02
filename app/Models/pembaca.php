<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pembaca extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'pembaca';
    protected $primaryKey = 'id';
    protected $fillable =
    [
        'email',
        'username',
        'password'
    ];
}
