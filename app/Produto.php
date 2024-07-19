<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'tbpr_nome',
        'tbpr_desc',
        'tbpr_peso',
        'tbpr_est_min',
        'tbpr_est_max',
        'tbpr_vend_var',
        'tbpr_vend_at',
        'tbpr_custo',
        'id_unidade'
    ];
}
