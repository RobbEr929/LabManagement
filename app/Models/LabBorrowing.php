<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabBorrowing extends Model
{
    public $table = 'lab_borrowing';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
