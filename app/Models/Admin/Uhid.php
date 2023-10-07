<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uhid extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid', 'policy_number', 'emp_id', 'policy_name',
        'uhid',
        'insured_name',
        'age',
        'dob',
        'gender',
        'relationship',
        'doj',
        'doc',
        'doe',
        'sum_insured',
        'status',
        'insurer',
        'updated_at',
        'created_at',
    ];
}
