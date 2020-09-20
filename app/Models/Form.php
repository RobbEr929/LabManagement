<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $table = 'form';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
