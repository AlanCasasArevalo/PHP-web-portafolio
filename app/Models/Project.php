<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // lo que se realiza al crear un modelo es que dicho modelo referencia a una tabla en prural y minucusla por tanto hemos crado el modelo Project que referenciara a la tabla projects
    // en caso de que no funcione dichas referencias automagicas se usa este comando protected $table = 'tabla_que_referenciar';
    use HasFactory;
}
