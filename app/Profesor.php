<?php
/**
 * Created by PhpStorm.
 * User: cjorellana
 * Date: 30/08/16
 * Time: 11:34 PM
 */
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesores';
    protected $fillable=['nombre','direccion ','telefono','profesion'];
    protected $hidden=['id','created_at','updated_at'];


    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }

}