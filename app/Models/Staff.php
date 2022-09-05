<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Auth;

class Staff extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'nrp',
        'fakultas',
        'pilihan1',
        'alasan1',
        'pilihan2',
        'alasan2',
        'idline',
        'nohp',
        'cv',
        'ktm',
        'fotodiri',
        'portofolio',
        'essay',
        'jadwal1',
        'jadwal2',
        'jadwal3',
        'jadwal4',
        'jadwal5',
        'jadwal6',
        'jadwal7',
        'jadwal8',
        'jadwal9',
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
}
