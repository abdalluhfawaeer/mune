<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Add
 * 
 * @property int $id
 * @property string $name_ar
 * @property string $name_en
 * @property string $price
 * @property int $sort
 * @property int $item_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Item $item
 *
 * @package App\Models
 */
class Add extends Model
{
	protected $table = 'adds';

	protected $casts = [
		'sort' => 'int',
		'item_id' => 'int'
	];

	protected $fillable = [
		'name_ar',
		'name_en',
		'price',
		'sort',
		'item_id'
	];

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
}
