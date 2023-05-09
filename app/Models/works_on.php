<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class works_on extends Model
{
    use HasFactory;
    protected $table = 'works_on';
    protected $fillable = [
        'whours',
        'employee_id',
        'project_id',
    ];
}
