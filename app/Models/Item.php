<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 * 
 * @property int $id
 * @property string $name_ar
 * @property string $name_en
 * @property string|null $img
 * @property string|null $desc
 * @property string|null $calories
 * @property string $staus
 * @property float $price
 * @property int $cat_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category $category
 *
 * @package App\Models
 */
class Item extends Model
{
	protected $table = 'items';

	protected $casts = [
		'price' => 'float',
		'cat_id' => 'int'
	];

	protected $fillable = [
		'name_ar',
		'name_en',
		'img',
		'desc',
		'calories',
		'staus',
		'price',
		'cat_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'cat_id');
	}
}
