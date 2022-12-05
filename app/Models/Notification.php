<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $filable=[
        'Title',
        'Notification',
        'Type',
        'Active',
        'created_date',
        'modified_date'
    ];
}
