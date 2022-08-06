<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casa_editorial extends Model
{
    protected $table='casa_editorial';
    public $timestamps=false;
    protected $fillable=[
        'id','nombre_casa','numero_registro','direccion','numro_telefono'
    ];
    protected $primaryKey = 'id';
}
