<?php 

namespace App;
use Illuminate\Database\Eloquent\Model;
 
class Solicitar extends Model
{
    protected $table ='solicitars';




    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['servicio', 'f_servicio', 'precio', 'marca', 'matricula', 'direccion', 'colonia'];
}