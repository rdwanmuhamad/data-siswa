<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    // use SoftDeletes;

    protected $fillable = [
        'nis',
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
