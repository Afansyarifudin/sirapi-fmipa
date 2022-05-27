<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'categories';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'slug',
    ];

    public function arsip()
    {
        return $this->belongsTo(Arsip::class);
    }





}
