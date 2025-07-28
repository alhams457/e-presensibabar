<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LoginAttempt
 * 
 * @property int $id
 * @property string $ip_address
 * @property string $username
 * @property Carbon $time
 *
 * @package App\Models
 */
class LoginAttempt extends Model
{
	protected $table = 'login_attempts';
	public $timestamps = false;

	protected $casts = [
		'time' => 'datetime'
	];

	protected $fillable = [
		'ip_address',
		'username',
		'time'
	];
}
