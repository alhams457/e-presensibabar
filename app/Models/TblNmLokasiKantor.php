<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tblnmlokasikantor
 *
 * @property int $id_lokasi
 * @property int|null $kd_opd
 * @property string|null $namakantor
 *
 * @package App\Models
 */
class Tblnmlokasikantor extends Model
{
	protected $table = 'tblnmlokasikantor';
	protected $primaryKey = 'id_lokasi';
	public $timestamps = false;

	protected $casts = [
		'kd_opd' => 'int'
	];

	protected $fillable = [
		'kd_opd',
		'namakantor'
	];

    public function opd()
    {
        return $this->belongsTo(TblOpd::class, 'kd_opd', 'kd_opd');
    }
}
