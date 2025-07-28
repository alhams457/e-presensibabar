<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Phbn
 * 
 * @property int $id
 * @property Carbon|null $date
 * @property string|null $ket
 *
 * @package App\Models
 */
class Phbn extends Model
{
	protected $table = 'phbn';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'date',
		'ket'
	];
}
