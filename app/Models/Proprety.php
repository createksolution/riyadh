<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprety extends Model
{
    use HasFactory;
    protected $fillable = [
        'unique',
        'client',
        'title',
        'photo',
        'status',
        'type',
        'price',
        'area',
        'room',
        'adr',
        'state',
        'desc',
        'other',
        'sps',
        'pay',
        'floor',
        'nbrFloor',
        'etat',
        'payPar',
        'expire'
    ];
}
