<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essayqanswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'e_id',
        'q_id',
        'std_id',
        'std_answer'
    ];
}
