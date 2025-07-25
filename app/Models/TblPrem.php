<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblPrem
 * 
 * @property int $id
 * @property string $nip
 * @property string $nama
 * @property string $uuid
 * @property bool $kd_pegawai
 *
 * @package App\Models
 */
class TblPrem extends Model
{
	protected $table = 'tbl_prem';
	public $timestamps = false;

	protected $casts = [
		'kd_pegawai' => 'bool'
	];

	protected $fillable = [
		'nip',
		'nama',
		'uuid',
		'kd_pegawai'
	];
}
