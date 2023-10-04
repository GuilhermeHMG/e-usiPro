<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //
    use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['tbf_razao_social', 'tbf_nome_fantasia', 'tbf_contato', 'tbf_cnpj', 'tbf_ie', 'tbf_dt_contrato', 'tbf_obs'];
}
