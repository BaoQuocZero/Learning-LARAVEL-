<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categrory extends Model
{
    protected $table = 'theloai';
    public $timestamps = false;
    use HasFactory;
}
