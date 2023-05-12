<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'addresses';
    protected $fillable = [
        'street',
        'city',
        'state',
        'postcode',
        'country',
    ];
}
