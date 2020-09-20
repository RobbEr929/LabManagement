<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenLaboratoryStudent extends Model
{
    public $table = 'open_laboratory_student';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
