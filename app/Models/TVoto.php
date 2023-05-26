<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TVoto
 * 
 * @property int $id_voto
 * @property string $nombre
 * @property string $dpi
 * @property string $telefono
 * @property string $lugar
 * @property string $ip
 * @property float|null $latitud
 * @property float|null $longitud
 * @property int|null $une
 * @property int|null $cambio
 * @property int|null $cabal
 * @property int|null $azul
 * @property int|null $r19
 * @property int|null $coalicion
 * @property int|null $humanista
 * @property int|null $vamos
 * @property Carbon $fecha_registro
 *
 * @package App\Models
 */
class TVoto extends Model
{
	protected $table = 't_votos';
	protected $primaryKey = 'id_voto';
	public $timestamps = false;

	protected $casts = [
		'latitud' => 'float',
		'longitud' => 'float',
		'une' => 'int',
		'cambio' => 'int',
		'cabal' => 'int',
		'azul' => 'int',
		'r19' => 'int',
		'coalicion' => 'int',
		'humanista' => 'int',
		'vamos' => 'int',
		'fecha_registro' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'dpi',
		'telefono',
		'lugar',
		'ip',
		'latitud',
		'longitud',
		'une',
		'cambio',
		'cabal',
		'azul',
		'r19',
		'coalicion',
		'humanista',
		'vamos',
		'fecha_registro'
	];
}
