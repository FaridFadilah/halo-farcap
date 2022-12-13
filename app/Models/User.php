<?php

namespace App\Models;

use App\Models\Sekolah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model{
    use HasFactory;
    // protected $fillable = ['nama', 'email', 'password'];
    protected $guarded = ["id"];
    public function sekolah(){
        return $this->belongsTo(Sekolah::class);
    }
}