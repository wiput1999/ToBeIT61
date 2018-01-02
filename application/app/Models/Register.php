<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register';

    protected $fillable = ['prefix', 'firstname', 'lastname', 'nickname', 'religion', 'degree', 'school', 'email',
        'disease', 'food', 'line', 'facebook', 'appointment', 'exam', 'round', 'saturday', 'sunday', 'saturday_checkout', 'sunday_checkout', 'walkin'];
}
