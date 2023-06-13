<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Institution
 *
 * @property $id
 * @property $name
 * @property $acronym
 * @property $activate
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Institution extends Model
{
    
    static $rules = [
		'name' => 'required',
		'acronym' => 'required',
		'activate' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','acronym','activate'];



}
