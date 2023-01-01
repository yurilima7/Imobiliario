<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locatario extends Model
{
    protected $table = 'tbllocatario';
    protected $primaryKey = 'idLocatario';
    protected $fillable = ['fk_locatario', 'fk_usuario', 'fk_imovel'];
    use HasFactory;
}
