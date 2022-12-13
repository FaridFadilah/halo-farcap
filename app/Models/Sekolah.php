<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model{
    use HasFactory;

    protected $guarded = ["id"];
    public function user(){
        return $this->hasMany(User::class);
    }
}