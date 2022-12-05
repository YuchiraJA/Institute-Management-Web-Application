<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eclass extends Model
{
    use HasFactory;

    protected $fillable = [

        'classType',
        'classSubject',
        'classFee',
        'classGrade'
    ];
}
