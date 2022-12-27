<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // modelo dos usuários
    protected $table = 'tblusuario';
    protected $primaryKey = 'idUsuario';
    protected $fillable = ['nome', 'email', 'cpf', 'telefone', 'senha', 'isLocator'];
    // use HasFactory;
}
