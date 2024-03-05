<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $nome;
    public $descricao;
    public $preco;
    public $categoria;
}