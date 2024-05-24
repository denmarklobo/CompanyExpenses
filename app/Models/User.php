<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_email',
        'user_address',
        'user_contact_number',
        'user_birthdate',
        'user_department',
        'user_salary',
        'user_status',
    ];
}
