<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TVisitasSanarte
 * 
 * @property int $id
 * @property string $nombre
 * @property string $correo
 * @property string $telefono
 * @property string|null $dpi
 * @property string|null $empadronado
 * @property string|null $ip
 * @property string|null $lugar
 * @property string|null $direccion
 * @property string|null $depto
 * @property string|null $muni
 * @property string|null $id_referal
 * @property float|null $lat_1
 * @property float|null $long_1
 * @property string|null $direccion_2
 * @property string|null $depto_2
 * @property string|null $muni_2
 * @property float|null $lat_2
 * @property float|null $long_2
 * @property int|null $guate
 * @property Carbon|null $fec_registro
 * @property string|null $evento
 *
 * @package App\Models
 */
class TVisitasSanarte extends Model
{
	protected $table = 't_visitas_sanarte';
	public $timestamps = false;

	protected $casts = [
		'lat_1' => 'float',
		'long_1' => 'float',
		'lat_2' => 'float',
		'long_2' => 'float',
		'guate' => 'int',
		'fec_registro' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'correo',
		'telefono',
		'dpi',
		'empadronado',
		'ip',
		'lugar',
		'direccion',
		'depto',
		'muni',
		'id_referal',
		'lat_1',
		'long_1',
		'direccion_2',
		'depto_2',
		'muni_2',
		'lat_2',
		'long_2',
		'guate',
		'fec_registro',
		'evento'
	];
}
