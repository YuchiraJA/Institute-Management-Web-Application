<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essayquestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'examQuestion',
        'file',
        'e_ID'
    ];
}
