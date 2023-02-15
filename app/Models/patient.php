<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'address',
        'age',
        'relevant',
        'title_pat',
        'firstname_pat',
        'lastname_pat',
        'age_pat',
        'hn',
    ];
}
