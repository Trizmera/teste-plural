<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testeplural extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email','cpf', 'cellphone', 'cep', 'address', 'password'];
}
