<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblstatusSubpresensi
 * 
 * @property int $id
 * @property int|null $kd_presensi
 * @property int|null $kd_subpresensi
 * @property string|null $nm_subpresensi
 *
 * @package App\Models
 */
class TblstatusSubpresensi extends Model
{
	protected $table = 'tblstatus_subpresensi';
	public $timestamps = false;

	protected $casts = [
		'kd_presensi' => 'int',
		'kd_subpresensi' => 'int'
	];

	protected $fillable = [
		'kd_presensi',
		'kd_subpresensi',
		'nm_subpresensi'
	];
}
