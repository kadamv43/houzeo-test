<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SearchDatum
 *
 * @property int $id
 * @property string $street_address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property int $property_type
 * @property string $county
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class SearchDatum extends Model
{
	protected $table = 'search_data';

	protected $casts = [
		'property_type' => 'int'
	];

	protected $fillable = [
		'street_address',
		'city',
		'state',
		'zip',
		'property_type',
		'county'
    ];

    public function property_type()
    {
        return $this->hasOne(PropertyType::class, 'id','property_type');
    }
}
