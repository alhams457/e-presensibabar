<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbsenRegulerDuplicatePhl
 *
 * @property int $id
 * @property string $uuid
 * @property string $nik
 * @property string $nama
 * @property float|null $lat
 * @property float|null $lon
 * @property string|null $image
 * @property Carbon $tanggal
 * @property Carbon|null $waktu
 * @property int $status
 * @property Carbon|null $selisih
 * @property int $kd_kehadiran
 * @property string|null $image_upload
 *
 * @package App\Models
 */
class AbsenRegulerDuplicatePhl extends Model
{
	protected $table = 'absen_reguler_duplicate_phl';
	public $timestamps = false;

	protected $casts = [
		'lat' => 'float',
		'lon' => 'float',
		'tanggal' => 'datetime',
		'waktu' => 'datetime',
		'status' => 'int',
		'selisih' => 'datetime',
		'kd_kehadiran' => 'int'
	];

	protected $fillable = [
		'uuid',
		'nik',
		'nama',
		'lat',
		'lon',
		'image',
		'tanggal',
		'waktu',
		'status',
		'selisih',
		'kd_kehadiran',
		'image_upload'
	];

    public function userPhl()
    {
        return $this->belongsTo(Userphl::class, 'uuid', 'uuid');
    }
}
