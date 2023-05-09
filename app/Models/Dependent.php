<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    use HasFactory;
    protected $table = 'Dependent';
    protected $fillable = [
        'name',
        'relationship',
        'Sex',
        'Birth_date',
        'employee_id',
    ];
}
