<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = [
        'tbu_unidade',
        'tbu_descricao'
    ];
}