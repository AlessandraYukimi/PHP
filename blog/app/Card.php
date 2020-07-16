<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    // utilizando soft deletes para nao excluir o registro do banco de dados e apenas adicionar a data que foi solicitada a exclusao de determinado registro dentro da coluna deleted_at
    use SoftDeletes;
    // indicando qual tabela do banco de dados o model Card irá representar
    protected $table = 'cards';
    // indicando quais colunas da tabela cards queremos trabalhar, seja para inserir ou alterar registros
    protected $fillable = [
        'title', 'content'
    ];
}
