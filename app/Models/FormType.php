<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormType extends Model
{
    public $table = 'form_type';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
