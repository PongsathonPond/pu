<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asnForm1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'f1',
        'f2',
        'f3',
        'f4',
        'f5',
        'f6_1',
        'f6_2',
        'f6_3',
        'f6_4',
        'f7_1',
        'f7_2',
        'f7_3',
        'f7_4',
        'sumtotal',
    ];

}
