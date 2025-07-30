<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function submenu()
    {
        return $this->belongsToMany(
			Submenu::class, 
			'menu_access', 
			'menu_id', 
			'submenu_id', 
			'id_menu', 
			'id_submenu')->where('usertype_id', Auth::user()->usertype);
    }

	public function menuAccess()
	{
		return $this->hasMany(MenuAccess::class, 'menu_id', 'id_menu');
	}

	public static function getActiveMenuForUser($userTypeId)
    {
        return self::with(['submenu' => function($query) {
            $query->orderBy('order_no');
        }])
        ->whereHas('menuAccess', function($query) use ($userTypeId) {
            $query->where('usertype_id', $userTypeId);
        })
        ->where('is_active', 1)
        ->orderBy('order_no')
        ->get();
    }
}
