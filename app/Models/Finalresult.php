<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalresult extends Model
{
    use HasFactory;

    protected $fillable = [
        'std_id',
        'e_id',
        'std_marks',
        't_feedback',
        't_id', 
    ];
}
