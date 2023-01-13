<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // protected $casts = [
    //     'hari_id' => 'array',
    //     'jam_id' => 'array',
    // ];
}
