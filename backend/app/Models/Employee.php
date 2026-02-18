<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'department',
        'avatar',
        'join_date',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'join_date' => 'date',
        'is_active' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     */
    protected $appends = ['years_of_service', 'is_veteran'];

    /**
     * Calculate years of service from join date.
     */
    public function getYearsOfServiceAttribute(): int
    {
        return Carbon::parse($this->join_date)->diffInYears(Carbon::now());
    }

    /**
     * Determine if the employee is a veteran (5+ years and active).
     */
    public function getIsVeteranAttribute(): bool
    {
        return $this->years_of_service >= 5 && $this->is_active;
    }
}
