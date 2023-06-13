<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 *
 * @property $id
 * @property $institution_id
 * @property $NombreProyecto
 * @property $fuenteFondos
 * @property $MontoPlanificado
 * @property $MontoPatrocinado
 * @property $MontoFondosPropios
 * @property $activate
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Project extends Model
{
    
    static $rules = [
		'institution_id' => 'required',
		'NombreProyecto' => 'required',
		'fuenteFondos' => 'required',
		'MontoPlanificado' => 'required',
		'MontoPatrocinado' => 'required',
		'MontoFondosPropios' => 'required',
		'activate' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['institution_id','NombreProyecto','fuenteFondos','MontoPlanificado','MontoPatrocinado','MontoFondosPropios','activate'];



}
