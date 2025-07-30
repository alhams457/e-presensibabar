<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * @property int $id_menu
 * @property string $menu_name
 * @property string $menu_controller
 * @property string $menu_function
 * @property string $menu_icon
 * @property bool $is_active
 * @property int $order_no
 *
 * @package App\Models
 */
class Menu extends Model
{
	protected $table = 'menus';
	protected $primaryKey = 'id_menu';
	public $timestamps = false;

	protected $casts = [
		'is_active' => 'bool',
		'order_no' => 'int'
	];

	protected $fillable = [
		'menu_name',
		'menu_controller',
		'menu_function',
		'menu_icon',
		'is_active',
		'order_no'
	];

    public function userTypes()
    {
        return $this->belongsToMany(Usertype::class, 'menu_access', 'menu_id', 'usertype_id', 'id_menu', 'id_usertype');
    }

    public function subMenu()
    {
        return $this->belongsToMany(Submenu::class, 'menu_access', 'menu_id', 'submenu_id', 'id_menu', 'id_submenu');
    }
}
