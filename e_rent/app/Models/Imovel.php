<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'tblimovel';
    protected $primaryKey = 'idImovel';
    protected $fillable = ['valor', 'descricao', 'status', 'fk_locador'];
    use HasFactory;
}
