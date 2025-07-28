<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LiburGuru
 * 
 * @property int $id
 * @property Carbon|null $date
 * @property string|null $ket
 *
 * @package App\Models
 */
class LiburGuru extends Model
{
	protected $table = 'libur_guru';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'date',
		'ket'
	];
}
