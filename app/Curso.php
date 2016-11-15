<?php namespace App;
/**
 * Created by PhpStorm.
 * User: cjorellana
 * Date: 30/08/16
 * Time: 11:34 PM
 */
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'valor', 'profesor_id'];
    protected $hidden=['id','created_at','updated_at'];

    public function profesor()
    {
        return $this->belongsTo('App\Profesor');
    }
    public function estudiantes()
    {
        return $this->belongsToMany('App\Estudiante');
    }

}