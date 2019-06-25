<?php

namespace App\Models\Aua;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{

protected $table ='tenders';

protected $fillable =['name', 'description' , 'filepath'];

protected $dates = ['updated_at', 'deleted_at'];

}
