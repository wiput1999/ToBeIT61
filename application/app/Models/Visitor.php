<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitor';

    protected $fillable = ['prefix', 'firstname', 'lastname', 'tel'];
}
