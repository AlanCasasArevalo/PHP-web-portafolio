<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function getRouteKeyName()
    {
        return 'url';
    }

    // El modificador $fillable hace que solo se actualicen aquellas variables que tengan el nombre dentro del array
//    protected $fillable = [
//        'title',
//        'url',
//        'description',
//    ];

    //Este metodo permite eliminar las validaciones y permite actualizar los elementos, es una mala practica debido a que se
    // si haces un Project::create(request()->all()); haces que los campos sean actualizados pudiendo inyectar scripts por ejemplo
    protected $guarded = [];
}
