<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Architect extends Model
{

protected $table;


/**
 * The attributes that are mass assignable.
 *
 * @var array
 */

protected $fillable = ['firstname', 'lastname', 'country' ,'email', 'dateofbirth', 'address', 'identifer','status', 'confirmation_code', 'confirmed'];

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */

protected $hidden = ['password', 'remember_token'];

/**
 * @var array
 */

protected $dates = ['updated_at', 'deleted_at'];

/**
 * @param array $attributes
 */
public function __construct(array $attributes = [])
{
    parent::__construct($attributes);
    $this->table = config('access.users_table');
}


}
