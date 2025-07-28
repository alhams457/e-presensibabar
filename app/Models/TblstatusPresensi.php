<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblstatusPresensi
 *
 * @property int $id
 * @property string|null $kd_presensi
 * @property string|null $nm_presensi
 *
 * @package App\Models
 */
class TblstatusPresensi extends Model
{
	protected $table = 'tblstatus_presensi';
	public $timestamps = false;

	protected $fillable = [
		'kd_presensi',
		'nm_presensi'
	];
}
