<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpenLaboratoryApproval extends Model
{
    public $table = 'open_laboratory_approval';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
