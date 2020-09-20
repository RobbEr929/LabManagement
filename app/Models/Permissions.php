<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    public $table = 'permissions';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
