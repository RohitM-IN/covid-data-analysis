<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'cities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'lat',
        'lng',
        'population',
        'state_code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function cityCategories()
    {
        return $this->hasMany(Category::class, 'city_id', 'id');
    }

    public function cityResources()
    {
        return $this->hasMany(Resource::class, 'city_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
