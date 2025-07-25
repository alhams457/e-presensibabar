<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TandaTangan
 *
 * @property int $id_ttd
 * @property string|null $nip
 * @property string|null $nama
 * @property string|null $jabatan
 * @property int|null $kd_opd
 * @property int|null $stts_plt
 * @property string|null $tte
 *
 * @package App\Models
 */
class TandaTangan extends Model
{
	protected $table = 'tanda_tangan';
	protected $primaryKey = 'id_ttd';
	public $timestamps = false;

	protected $casts = [
		'kd_opd' => 'int',
		'stts_plt' => 'int'
	];

	protected $fillable = [
		'nip',
		'nama',
		'jabatan',
		'kd_opd',
		'stts_plt',
		'tte'
    ];

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }
}
