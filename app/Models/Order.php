<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property float $total
 * @property string $type
 * @property float $delviry
 * @property string $status
 * @property int $menu_id
 * @property int $customer_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Customer $customer
 * @property Mune $mune
 * @property Collection|OrderDetail[] $order_details
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'total' => 'float',
		'delviry' => 'float',
		'menu_id' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'total',
		'type',
		'delviry',
		'status',
		'menu_id',
		'customer_id'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function mune()
	{
		return $this->belongsTo(Mune::class, 'menu_id');
	}

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}
}
