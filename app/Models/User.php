<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'region_id',
        'password',
        'basic_count', // 追加
        'user_mode',   // 追加
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
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function labelStorage()
    {
        return $this->hasMany(LabelStorages::class);
    }

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function answerResult()
    {
        return $this->hasMany(AnswerResults::class);
    }

    public function kaizen()
    {
        return $this->hasMany(Kaizen::class);
    }
    public function mymemo()
    {
        return $this->hasMany(Mymemo::class);
    }
    public function rank()
    {
        return $this->hasMany(Rank::class);
    }

}
