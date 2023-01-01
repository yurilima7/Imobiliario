<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'tblendereco';
    protected $primaryKey = 'idEndereco';
    protected $fillable = ['fk_imovel', 'estado', 'cidade', 'bairro', 'rua', 'numero'];
    use HasFactory;
}
