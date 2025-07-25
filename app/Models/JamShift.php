<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JamShift
 * 
 * @property int $id
 * @property int|null $kd_presensi
 * @property int|null $kd_subpresensi
 * @property int $kd_shift
 * @property Carbon|null $mulai
 * @property Carbon $selesai
 *
 * @package App\Models
 */
class JamShift extends Model
{
	protected $table = 'jam_shift';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int',
		'kd_shift' => 'int',
		'mulai' => 'datetime',
		'selesai' => 'datetime'
	];

	protected $fillable = [
		'id',
		'kd_presensi',
		'kd_subpresensi',
		'kd_shift',
		'mulai',
		'selesai'
	];
}
