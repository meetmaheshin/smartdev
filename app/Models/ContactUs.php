<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email_id',
        'phone_number',
        'preferred_contact_method',
        'budget',
        'time_frame',
        'special_requirement',
    ];
}
