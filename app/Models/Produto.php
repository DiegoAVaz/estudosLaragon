<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /* O laravel pluraliza automaticamente o nome de tabelas. Perceba que ele fez a busca na 
    tabela "produtos" e exibiu o resultado corretamente. Porém, isso pode não dar certo. Nesses
    casos, é necessário definir a tabela como no código abaixo:
    
    protected $table = 'produtos';
    */
}
