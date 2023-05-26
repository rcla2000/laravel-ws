<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VwResultado
 * 
 * @property string $partido
 * @property int $votos
 *
 * @package App\Models
 */
class VwResultado extends Model
{
	protected $table = 'vw_resultados';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'votos' => 'int'
	];

	protected $fillable = [
		'partido',
		'votos'
	];
}
