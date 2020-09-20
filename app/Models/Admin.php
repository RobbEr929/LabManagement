<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $table = 'super_admin';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
