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
        'f1_2',
        'f1_3',
        'f2',
        'f3_1',
        'f3_2',
        'f3_3',
        'f4_1',
        'f4_2',
        'f5',
        'f6_1',
        'f6_2',
        'f6_3',
        'f6_4',
        'f6_5',
        'f7_1',
        'f7_2',
        'f7_3',
        'f7_4',
        'sumtotal',
    ];

    public function asn1topat()
    {

        return $this->hasMany(patient::class, 'id', 'patient_id');

    }

}
