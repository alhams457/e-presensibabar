<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbsenBaru
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nip
 * @property string $nama
 * @property float|null $lat
 * @property float|null $lon
 * @property string|null $image
 * @property Carbon $tanggal
 * @property Carbon|null $waktu_pagi
 * @property Carbon|null $waktu_siang
 * @property Carbon|null $waktu_sore
 * @property Carbon|null $selisih
 * @property int $kd_kehadiran
 *
 * @package App\Models
 */
class AbsenBaru extends Model
{
	protected $table = 'absen_baru';
	public $timestamps = false;

	protected $casts = [
		'lat' => 'float',
		'lon' => 'float',
		'tanggal' => 'datetime',
		'waktu_pagi' => 'datetime',
		'waktu_siang' => 'datetime',
		'waktu_sore' => 'datetime',
		'selisih' => 'datetime',
		'kd_kehadiran' => 'int'
	];

	protected $fillable = [
		'uuid',
		'nip',
		'nama',
		'lat',
		'lon',
		'image',
		'tanggal',
		'waktu_pagi',
		'waktu_siang',
		'waktu_sore',
		'selisih',
		'kd_kehadiran'
	];
}
