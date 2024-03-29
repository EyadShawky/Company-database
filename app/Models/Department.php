<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'Department';
    protected $fillable = [
        'locations',
        'name',
        'number',
        'number_of_employess',
        'mgr_id'
    ];
}
