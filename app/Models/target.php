<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class target extends Model
{
    use HasFactory;

    protected $fillable = [
        'objek',
        'quartal',
        'tahun',
        'target',
    ];
}
