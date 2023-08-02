<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'code',
        'referral_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function balance(): HasOne
    {
        return $this->hasOne(Balance::class);
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Student::class);
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }
    public function registrationStep()
    {
        $step = 0;
        if ($this->profile) return 1;
        if (count($this->enrollments)) return 2;
    }
    public function enrollmentStatusFor($course_id)
    {
        $status = 0;
        if ($this->profile) {
            $status = 1;
            if ($this->enrollments()->in($course_id)->first()) {
                $status = 2;
            }
        }
        // if ($this->enrollments()->in($course_id)->first()->notified) $status = 4;
        // if ($this->enrollments()->in($course_id)->first()->fee_paid) $status = 3;
        // else
        // elseif  $status = 1;

        return $status;
    }
}
