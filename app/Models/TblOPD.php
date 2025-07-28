<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TblOpd
 *
 * @property int $id
 * @property int|null $kd_opd
 * @property string|null $nama_opd
 *
 * @package App\Models
 */
class TblOpd extends Model
{
	protected $table = 'tbl_opd';
	public $timestamps = false;

	protected $casts = [
		'kd_opd' => 'int'
	];

	protected $fillable = [
		'kd_opd',
		'nama_opd'
	];

    public function unit()
    {
        return $this->hasMany(TblUnitOpd::class, 'kd_opd', 'kd_opd');
    }

    public function subunit()
    {
        return $this->hasMany(TblSubunitOpd::class, 'kd_opd', 'kd_opd');
    }

    public function dtPns()
    {
        return $this->hasMany(DtPhl::class, 'kd_opd', 'kd_opd');
    }

    public function dtPhl()
    {
        return $this->hasMany(DtPhl::class, 'kd_opd', 'kd_opd');
    }

    public function userPns()
    {
        return $this->hasMany(Userpns::class, 'kd_opd', 'kd_opd');
    }

    public function userPhl()
    {
        return $this->hasMany(Userphl::class, 'kd_opd', 'kd_opd');
    }

    public function refKordinat()
    {
        return $this->hasMany(RefKordinat::class, 'kd_opd', 'kd_opd');
    }

    public function rekapPhl()
    {
        return $this->hasMany(RekapPhl::class, 'kd_opd', 'kd_opd');
    }

    public function rekapPhlBaru()
    {
        return $this->hasMany(RekapPhlBaru::class, 'kd_opd', 'kd_opd');
    }

    public function rekapPns()
    {
        return $this->hasMany(RekapPns::class, 'kd_opd', 'kd_opd');
    }

    public function rekapPnsBaru()
    {
        return $this->hasMany(RekapPnsBaru::class, 'kd_opd', 'kd_opd');
    }

    public function tableBasisData()
    {
        return $this->hasMany(TableBasisData::class, 'kd_opd', 'kd_opd');
    }

    public function tableBasisDataPhl()
    {
        return $this->hasMany(TableBasisDataPhl::class, 'kd_opd', 'kd_opd');
    }

    public function nmlokasikantor()
    {
        return $this->hasOne(Tblnmlokasikantor::class, 'kd_opd', 'kd_opd');
    }
}
