<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Log
 * 
 * @property int $id
 * @property string $uri
 * @property string $method
 * @property string|null $params
 * @property string $api_key
 * @property string $ip_address
 * @property int $time
 * @property float|null $rtime
 * @property string $authorized
 * @property int|null $response_code
 *
 * @package App\Models
 */
class Log extends Model
{
	protected $table = 'logs';
	public $timestamps = false;

	protected $casts = [
		'time' => 'int',
		'rtime' => 'float',
		'response_code' => 'int'
	];

	protected $fillable = [
		'uri',
		'method',
		'params',
		'api_key',
		'ip_address',
		'time',
		'rtime',
		'authorized',
		'response_code'
	];
}
