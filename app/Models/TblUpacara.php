<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TblUpacara
 * 
 * @property int $Id_up
 * @property Carbon $tanggal
 * @property int $opd_id
 * @property float $lat
 * @property float $long
 * @property float $radius
 * @property int $kd_presensi
 * @property int $kd_subpresensi
 *
 * @package App\Models
 */
class TblUpacara extends Model
{
	protected $table = 'tbl_upacara';
	protected $primaryKey = 'Id_up';
	public $timestamps = false;

	protected $casts = [
		'tanggal' => 'datetime',
		'opd_id' => 'int',
		'lat' => 'float',
		'long' => 'float',
		'radius' => 'float',
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int'
	];

	protected $fillable = [
		'tanggal',
		'opd_id',
		'lat',
		'long',
		'radius',
		'kd_presensi',
		'kd_subpresensi'
	];
}
