<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'level_id',
        'fakultas_id',
        'jurusan_id',
        'nim',
        'jenjang',
        'angkatan',
        'semester',
        'dpp_id',
        'nidn',
        'gender'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    // RELASI
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    // DPP mahasiswa
    public function dosenPembimbing()
    {
        return $this->belongsTo(User::class, 'dpp_id');
    }

    // Mahasiswa bimbingan dosen
    public function mahasiswaBimbingan()
    {
        return $this->hasMany(User::class, 'dpp_id');
    }
}
