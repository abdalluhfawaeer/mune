<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VariationsAdd
 * 
 * @property int $id
 * @property string $title_ar
 * @property string $title_en
 * @property float $price
 * @property int $sort
 * @property int $variations_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Variation $variation
 *
 * @package App\Models
 */
class VariationsAdd extends Model
{
	protected $table = 'variations_add';

	protected $casts = [
		'price' => 'float',
		'sort' => 'int',
		'variations_id' => 'int'
	];

	protected $fillable = [
		'title_ar',
		'title_en',
		'price',
		'sort',
		'variations_id'
	];

	public function variation()
	{
		return $this->belongsTo(Variation::class, 'variations_id');
	}
}
