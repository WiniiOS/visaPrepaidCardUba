<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'surname',
        'lastname',
        'city',
        'residentialAdress',
        'emailAdress',
        'phone1',
        'phone2',
        'cniNumber',
        'birthday',
        'passeport',
        'profession',
        'toContactName',
        'toContactPhone',
        'toContactAdress',
        'segment'
    ];
}
