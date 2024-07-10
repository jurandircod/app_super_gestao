<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //o eloquente coloca s no final das tabelas automático mas eu posso dfinir para qual tabela vai utilizando o protected $table
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
