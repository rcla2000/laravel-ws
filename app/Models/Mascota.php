<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mascota
 * 
 * @property int $id_mascota
 * @property string $nombre_mascota
 * @property int $id_especie
 * @property int $id_raza
 * @property string $color_pelo
 * @property string|null $fecha_nacimiento
 * @property float $peso
 * @property string $esterilizado
 * @property int $id_estado
 * 
 * @property Especy $especy
 * @property EstadoMascota $estado_mascota
 * @property Raza $raza
 * @property Collection|Adopcione[] $adopciones
 * @property Collection|EstadoSalud[] $estado_saluds
 * @property Collection|ImgMascota[] $img_mascotas
 * @property Collection|ReporteRescate[] $reporte_rescates
 * @property Collection|ReporteVacuna[] $reporte_vacunas
 *
 * @package App\Models
 */
class Mascota extends Model
{
	protected $table = 'mascotas';
	protected $primaryKey = 'id_mascota';
	public $timestamps = false;

	protected $casts = [
		'id_especie' => 'int',
		'id_raza' => 'int',
		'peso' => 'float',
		'id_estado' => 'int'
	];

	protected $fillable = [
		'nombre_mascota',
		'id_especie',
		'id_raza',
		'color_pelo',
		'fecha_nacimiento',
		'peso',
		'esterilizado',
		'id_estado'
	];

	public function especy()
	{
		return $this->belongsTo(Especy::class, 'id_especie');
	}

	public function estado_mascota()
	{
		return $this->belongsTo(EstadoMascota::class, 'id_estado');
	}

	public function raza()
	{
		return $this->belongsTo(Raza::class, 'id_raza');
	}

	public function adopciones()
	{
		return $this->hasMany(Adopcione::class, 'id_mascota');
	}

	public function estado_saluds()
	{
		return $this->hasMany(EstadoSalud::class, 'id_mascota');
	}

	public function img_mascotas()
	{
		return $this->hasMany(ImgMascota::class, 'id_mascota');
	}

	public function reporte_rescates()
	{
		return $this->hasMany(ReporteRescate::class, 'id_mascota');
	}

	public function reporte_vacunas()
	{
		return $this->hasMany(ReporteVacuna::class, 'id_mascota');
	}
}
