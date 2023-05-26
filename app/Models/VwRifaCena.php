<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VwRifaCena
 * 
 * @property string $nombre
 * @property string|null $dpi
 * @property string $telefono
 *
 * @package App\Models
 */
class VwRifaCena extends Model
{
	protected $table = 'vw_rifa_cenas';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'dpi',
		'telefono'
	];
}
