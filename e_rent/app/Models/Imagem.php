<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $table = 'tblimagem';
    protected $primaryKey = 'idImagem';
    protected $fillable = ['fk_imovel', 'imagem', 'fk_locador'];
    use HasFactory;
}
