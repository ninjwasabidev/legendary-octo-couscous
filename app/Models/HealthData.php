<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthData extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'date', 'heart_rate', 'blood_pressure_min','blood_pressure_max'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
