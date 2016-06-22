<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre','apellido_paterno','apellido_materno', 'fecha_nacimiento', 'ingresos_anuales'];

    public static $rules= [
        'nombre' => 'required',
        'apellido_paterno' => 'required',
        'apellido_materno' => 'required',
        'fecha_nacimiento' => 'required|date',
        'ingresos_anuales' => 'required',
    ];

    public static function buscar($id){
        return DB::table('empleados')
            ->where('id',$id)
            ->first();
    }
    
}
