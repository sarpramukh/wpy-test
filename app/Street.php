<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Street extends Model
{
	protected $table = 'streets';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street_name'
    ];

     /**
     * Get the houses for the street.
     */
    public function houses()
    {
        return $this->hasMany('App\House');
    }
}
