<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    // Mutator for the 'name' attribute
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    // Mutator for the 'email' attribute
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
}
