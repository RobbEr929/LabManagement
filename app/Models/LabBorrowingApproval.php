<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabBorrowingApproval extends Model
{
    public $table = 'lab_borrowing_approval';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
