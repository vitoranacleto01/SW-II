<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $nome;
    protected $cpf;
    public $email;
    protected $senha;
}