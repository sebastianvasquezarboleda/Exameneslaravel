<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Procedimiento
 *
 * @property $id
 * @property $Nombre
 * @property $Precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Procedimiento extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Precio'];



}
