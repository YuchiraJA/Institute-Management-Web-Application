<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stdattachment extends Model
{
    
    use HasFactory;

    protected $fillable = [
        
        'e_id',
        'std_id',
        'file',
        'feedback'

    ];
}
