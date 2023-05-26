<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VwResultadosLugar
 * 
 * @property string $lugar
 * @property float|null $une
 * @property float|null $cambio
 * @property float|null $cabal
 * @property float|null $r19
 * @property float|null $coalicion
 * @property float|null $azul
 * @property float|null $vamos
 * @property float|null $humanista
 *
 * @package App\Models
 */
class VwResultadosLugar extends Model
{
	protected $table = 'vw_resultados_lugar';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'une' => 'float',
		'cambio' => 'float',
		'cabal' => 'float',
		'r19' => 'float',
		'coalicion' => 'float',
		'azul' => 'float',
		'vamos' => 'float',
		'humanista' => 'float'
	];

	protected $fillable = [
		'lugar',
		'une',
		'cambio',
		'cabal',
		'r19',
		'coalicion',
		'azul',
		'vamos',
		'humanista'
	];
}
