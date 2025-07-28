<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Userpn
 *
 * @property int $id
 * @property string $nip
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
class Userpns extends Model
{
	protected $table = 'userpns';
	public $timestamps = false;

	protected $casts = [
		'id_lokasi' => 'int',
		'logstatus' => 'bool',
		'kd_pegawai' => 'bool'
	];

	protected $fillable = [
		'nip',
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

    public function dtPns()
    {
        return $this->belongsTo(DtPns::class, 'nip', 'nip');
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
