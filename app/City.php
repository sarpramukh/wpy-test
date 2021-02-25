<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
	protected $table = 'cities';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_name'
    ];

    /**
     * Get the streets for the city.
     */
    public function streets()
    {
        return $this->hasMany('App\Street');
    }
}
