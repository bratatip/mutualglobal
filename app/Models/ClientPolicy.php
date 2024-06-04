<?php

namespace App\Models;

use App\Models\Admin\Insurer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientPolicy extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'customer_id',
        'insurer_id',
        'policy_no',
        'policy_start_date',
        'policy_end_date',
        'occupancy',
        'property_address',
        'premium_inc_gst',
        'file_path',
    ];

    protected $dates = ['deleted_at'];

    // Relationships
    public function customer()
    {
        return $this->belongsTo(User::class);
    }

    public function insurer()
    {
        return $this->belongsTo(Insurer::class);
    }
}
