<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model {

    protected $table = 'country';

    const CREATED_AT = null;
    const UPDATED_AT = null;

    public function states()
    {
        return $this->hasMany('App\Models\State', 'country_id', 'id');
    }
}
