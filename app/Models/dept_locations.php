<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dept_locations extends Model
{
    use HasFactory;
    protected $table = 'dept_locations';
    protected $fillable = [
        'd_location',
        'department_id',
    ];
}
