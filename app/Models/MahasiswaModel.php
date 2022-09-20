<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'nama', 'avatar'];

    public $timestamps = false;
}
