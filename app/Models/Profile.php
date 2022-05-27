<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profiles';

    protected $fillable = [
        'user_id',
        'username',
        'NIP-NIM',
        'alamat',
        'prodi',
        'jurusan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
