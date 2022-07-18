<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'FirstName',
        'LastName',
        'DocumentType',
        'DocumentNumber',
        'BaseSalary',
        'SalaryDay',
        'Position',
        'Department',
        'EPS',
        'AFD',
        'ARL',
        'Status',
    ];

}
