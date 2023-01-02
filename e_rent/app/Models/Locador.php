<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locador extends Model
{
    protected $table = 'tbllocador';
    protected $primaryKey = 'idLocador';
    protected $fillable = ['cnpj', 'fk_usuario'];
    use HasFactory;
}
