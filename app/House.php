<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class House extends Model
{
	protected $table = 'houses';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'house_num', 'pincode'
    ];

     /**
     * Get the cars for the house.
     */
    public function cars()
    {
        return $this->hasMany('App\Car');
    }

    /**
     * Get the peoples for the house.
     */
    public function peoples()
    {
        return $this->hasMany('App\People');
    }
}
