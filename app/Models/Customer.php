<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property int $menu_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Mune $mune
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customer';

	protected $casts = [
		'menu_id' => 'int'
	];

	protected $fillable = [
		'name',
		'mobile',
		'menu_id'
	];

	public function mune()
	{
		return $this->belongsTo(Mune::class, 'menu_id');
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
