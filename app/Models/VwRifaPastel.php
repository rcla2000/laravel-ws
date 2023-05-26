<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VwRifaPastel
 * 
 * @property string $nombre
 * @property string|null $dpi
 * @property string $telefono
 *
 * @package App\Models
 */
class VwRifaPastel extends Model
{
	protected $table = 'vw_rifa_pastel';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'dpi',
		'telefono'
	];
}
