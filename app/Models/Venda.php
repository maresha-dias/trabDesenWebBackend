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
        'nome-do-produto',
        'preço-do-produto',
        'quantidade',
        'tamanho-letra',
        'tamanho-numero',
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
        'preço do produto' => 'float',
        'tamanho-numero' => 'int'
    ];
}
