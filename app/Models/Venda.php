<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomeProduto',
        'precoProduto',
        'quantidade',
        'tamanhoLetra',
        'tamanhoNumero',
        'cor',
        'tipo'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'quantidade' => 'int',
        'precoProduto' => 'float',
        'tamanhoNumero' => 'int'
    ];
}
