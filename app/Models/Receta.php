<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    //Solo estos campos se agregaran en la BD para evitar inyeccion sql
    protected $fillable = [
        'titulo','preparacion', 'ingredientes','imagen', 'categoria_id'
    ];

    //Obtiene la categoria de la recet via FK

    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class);
    }

    //Obtenemos la info del Usuario via FK

    public function autor()
    {
        return $this->belongsto(User::class, 'user_id'); //FK de esta tabla
    }
}
