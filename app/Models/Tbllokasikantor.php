<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tbllokasikantor
 * 
 * @property string $kodeunit
 * @property string|null $lokasi
 *
 * @package App\Models
 */
class Tbllokasikantor extends Model
{
	protected $table = 'tbllokasikantor';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'kodeunit',
		'lokasi'
	];
}
