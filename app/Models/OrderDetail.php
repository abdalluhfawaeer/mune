<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 * 
 * @property int $id
 * @property int $order_id
 * @property int $item_id
 * @property string $item_img
 * @property string $item_title
 * @property int $qty
 * @property float $price
 * @property array $acc
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Item $item
 * @property Order $order
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	protected $table = 'order_details';

	protected $casts = [
		'order_id' => 'int',
		'item_id' => 'int',
		'qty' => 'int',
		'price' => 'float',
		'acc' => 'json'
	];

	protected $fillable = [
		'order_id',
		'item_id',
		'item_img',
		'item_title',
		'qty',
		'price',
		'acc'
	];

	public function item()
	{
		return $this->belongsTo(Item::class);
	}

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}
