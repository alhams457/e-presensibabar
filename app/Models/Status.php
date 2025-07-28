<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 * 
 * @property int $id
 * @property int $kode_status
 * @property string $nama_status
 *
 * @package App\Models
 */
class Status extends Model
{
	protected $table = 'status';
	public $timestamps = false;

	protected $casts = [
		'kode_status' => 'int'
	];

	protected $fillable = [
		'kode_status',
		'nama_status'
	];
}
