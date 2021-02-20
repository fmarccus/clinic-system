<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'last_name',
        'first_name',
        'sex',
        'age',
        'email',
        'contact_number',
        'general_condition',
        'medical_history'
    ];
}
