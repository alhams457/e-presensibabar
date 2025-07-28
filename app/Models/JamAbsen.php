<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JamAbsen
 * 
 * @property int $id
 * @property int $kd_presensi
 * @property int $kd_subpresensi
 * @property Carbon $start_app
 * @property Carbon $start_checkin
 * @property Carbon $start_checkin_jumat
 * @property Carbon $start_breakin
 * @property Carbon $start_breakin_jumat
 * @property Carbon $start_checkout
 * @property Carbon $start_checkout_jumat
 * @property Carbon $stop
 *
 * @package App\Models
 */
class JamAbsen extends Model
{
	protected $table = 'jam_absen';
	public $timestamps = false;

	protected $casts = [
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int',
		'start_app' => 'datetime',
		'start_checkin' => 'datetime',
		'start_checkin_jumat' => 'datetime',
		'start_breakin' => 'datetime',
		'start_breakin_jumat' => 'datetime',
		'start_checkout' => 'datetime',
		'start_checkout_jumat' => 'datetime',
		'stop' => 'datetime'
	];

	protected $fillable = [
		'kd_presensi',
		'kd_subpresensi',
		'start_app',
		'start_checkin',
		'start_checkin_jumat',
		'start_breakin',
		'start_breakin_jumat',
		'start_checkout',
		'start_checkout_jumat',
		'stop'
	];
}
