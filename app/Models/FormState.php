<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormState extends Model
{
    public $table = 'form_state';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
