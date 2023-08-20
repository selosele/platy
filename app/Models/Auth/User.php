<?php

namespace App\Models\Auth;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * 회원 Model
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * 테이블명
     */
    protected $table = 'MEMBER';

    /**
     * 기본 키
     */
    protected $primaryKey = 'NO';

    /**
     * 기본 키의 데이터 타입
     */
    protected $keyType = 'string';

    /**
     * timestamps 비활성화
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ACCOUNT',
        'EMAIL',
        'NICKNAME',
        'PASSWORD',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'PASSWORD',
        'REMEMBER_TOKEN',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'PASSWORD' => 'hashed',
        'REG_DATE' => 'datetime',
    ];
}
