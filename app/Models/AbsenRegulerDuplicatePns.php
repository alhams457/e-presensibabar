<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbsenRegulerDuplicatePn
 *
 * @property int $id
 * @property string $uuid
 * @property string $nip
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
class AbsenRegulerDuplicatePns extends Model
{
	protected $table = 'absen_reguler_duplicate_pns';
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
		'nip',
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

    public function userPns()
    {
        return $this->belongsTo(Userpns::class, 'uuid', 'uuid');
    }
}
