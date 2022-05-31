<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lname',
        'username',
        'sex',
        'state',
        'adr',
        'phone',
        'photo',
        'type',
        'birth',
        'password',
        'remember_token',
    ];
}
