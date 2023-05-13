<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';

    protected $fillable = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function lelang()
    {
        return $this->hasMany(Lelang::class);
    }
}
