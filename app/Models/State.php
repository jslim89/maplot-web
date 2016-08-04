<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model {

    protected $table = 'state';

    const CREATED_AT = null;
    const UPDATED_AT = null;

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id', 'id');
    }
}
