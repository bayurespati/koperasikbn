<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password', 'role_id', 'nip', 'divisi_id', 'role_id', 'is_active', 'image_name', 'image_link', 'phone', 'jabatan_kbn_id', 'no_anggota', 'tanggal_masuk'
    ];
    protected $table = "users";

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relation 
     *
     */
    public function jabatanKbn()
    {
        return $this->belongsTo('App\Models\JabatanKbn', 'jabatan_kbn_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }

    public function divisi()
    {
        return $this->belongsTo('App\Models\Divisi', 'divisi_id', 'id');
    }
}
