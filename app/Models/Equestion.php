<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'examQuestion',
        'examQuestionOptionA',
        'examQuestionOptionB',
        'examQuestionOptionC',
        'examQuestionOptionD',
        'correctAnswer',
        'e_ID'
    ];
}
