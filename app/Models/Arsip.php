<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Arsip extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'arsips';

    protected $fillable = [
        'category_id',
        'user_id',
        'name',
        'deskripsi',
        'sifat',
        'file',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
