<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DatUrl
 * 
 * @property int $id_url
 * @property string $url_absensi
 * @property string $url_ekin
 * @property string $url_ekinphl
 * @property string $url_sidilan
 * @property string|null $url_nonasn
 * @property string|null $ukey
 * @property string|null $key
 * @property string|null $ukey1
 * @property string|null $key1
 * @property string|null $ukey2
 * @property string|null $key2
 * @property string|null $ukey3
 * @property string|null $key3
 * @property string|null $ukey4
 * @property string|null $key4
 *
 * @package App\Models
 */
class DatUrl extends Model
{
	protected $table = 'dat_url';
	protected $primaryKey = 'id_url';
	public $timestamps = false;

	protected $fillable = [
		'url_absensi',
		'url_ekin',
		'url_ekinphl',
		'url_sidilan',
		'url_nonasn',
		'ukey',
		'key',
		'ukey1',
		'key1',
		'ukey2',
		'key2',
		'ukey3',
		'key3',
		'ukey4',
		'key4'
	];
}
