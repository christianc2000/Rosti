<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plato
 *
 * @property $cod_plato
 * @property $nombre
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plato extends Model
{
    
    static $rules = [
		'cod_plato' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cod_plato','nombre','precio'];



}
