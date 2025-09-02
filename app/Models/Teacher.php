<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'nik',
        'name',
        'email',
        'address',
        'provinces_id',
        'regencies_id',
        'number_phone',
        'status'
    ];

    protected $hidden = [

    ];
}
