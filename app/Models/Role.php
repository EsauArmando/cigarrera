<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    //funciones que permiten revisar si el rol de usuario esta permitido y esta en la base de datos

    //función 1  al momento de iniciar sesión, que el rol este autorizad
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(User::class)->WithTimestamps();
    }
}
