<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asnForm2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'f1',
        'f2',
        'f3',
        'f4',
        'f5',
        'f6',
        'f7',
        'f8',
        'f9',
        '10',
        'sumtotal',
    ];
}

