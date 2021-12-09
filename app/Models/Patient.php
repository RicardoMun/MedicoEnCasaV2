<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'oximetria',
        'frec_respiratoria',
        'frec_cardiaca',
        'temperatura',
        'presion_arterial',
        'glicemias',
    ];

}
