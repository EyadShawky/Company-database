<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'Employee';
    protected $fillable = [
        'Fname',
        'Mname',
        'Lname',
        'Address',
        'Sex',
        'Bdate',
        'salary',
        'department_id',
        'super_ssn'
    ];
}
