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
        'residentialAddress',
        'phone1',
        'phone2',
        'cniNumber',
        'lieuCreationCni',
        'birthday',
        'profession',
        'toContactName',
        'toContactPhone',
        'toContactAddress',
        'segment'
    ];
}
