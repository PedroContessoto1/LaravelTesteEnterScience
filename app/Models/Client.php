<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';


    protected $fillable = [
        'name',
        'birth_date',
        'sex',
        'cep',
        'street',
        'house_number',
        'complement',
        'city',
        'states',
        'email',
        'phone'
    ];

}
