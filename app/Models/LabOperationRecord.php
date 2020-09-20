<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabOperationRecord extends Model
{
    public $table = 'lab_operation_records';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
