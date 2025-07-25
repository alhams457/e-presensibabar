<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Submenu
 *
 * @property int $id_submenu
 * @property string $submenu_name
 * @property string $submenu_function
 * @property int $menu_id
 * @property int $order_no
 *
 * @package App\Models
 */
class Submenu extends Model
{
	protected $table = 'submenu';
	protected $primaryKey = 'id_submenu';
	public $timestamps = false;

	protected $casts = [
		'menu_id' => 'int',
		'order_no' => 'int'
	];

	protected $fillable = [
		'submenu_name',
		'submenu_function',
		'menu_id',
		'order_no'
	];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'menu_id');
    }
}
