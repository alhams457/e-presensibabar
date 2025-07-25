<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Userphl
 *
 * @property int $id
 * @property string $nik
 * @property string $nama
 * @property string $uuid
 * @property int $id_lokasi
 * @property string $kd_opd
 * @property string $kd_unit_opd
 * @property string $kd_subunit_opd
 * @property bool $logstatus
 * @property bool $kd_pegawai
 *
 * @package App\Models
 */
class Userphl extends Model
{
	protected $table = 'userphl';
	public $timestamps = false;

	protected $casts = [
		'id_lokasi' => 'int',
		'logstatus' => 'bool',
		'kd_pegawai' => 'bool'
	];

	protected $fillable = [
		'nik',
		'nama',
		'uuid',
		'id_lokasi',
		'kd_opd',
		'kd_unit_opd',
		'kd_subunit_opd',
		'logstatus',
		'kd_pegawai'
	];

    public function key()
    {
        return $this->hasOne(Keys::class, 'key', 'uuid');
    }

    public function dtPhl()
    {
        return $this->belongsTo(DtPhl::class, 'nik', 'nik');
    }

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }

    public function unitOpd()
    {
        return $this->belongsTo(TblUnitOpd::class, 'kd_unit_opd', 'kd_unit_opd');
    }

    public function subunitOpd()
    {
        return $this->belongsTo(TblSubunitOpd::class, 'kd_subunit_opd', 'kd_subunit_opd');
    }
}
