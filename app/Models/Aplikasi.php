<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
