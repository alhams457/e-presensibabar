<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuAccess
 *
 * @property int $id_menu_access
 * @property int $usertype_id
 * @property int $menu_id
 * @property int|null $submenu_id
 *
 * @package App\Models
 */
class MenuAccess extends Model
{
	protected $table = 'menu_access';
	protected $primaryKey = 'id_menu_access';
	public $timestamps = false;

	protected $casts = [
		'usertype_id' => 'int',
		'menu_id' => 'int',
		'submenu_id' => 'int'
	];

	protected $fillable = [
		'usertype_id',
		'menu_id',
		'submenu_id'
	];
}
