<?php

namespace App\Models\Aua;

use Illuminate\Database\Eloquent\Model;

class AreaExpertise extends Model
{


 protected $table ='area_expertise';

 protected $fillable =['theme','subtheme_id'];

 protected $dates = ['updated_at', 'deleted_at'];



  public function professionalexperience()
    {
          return $this->hasMany('App\Models\Aua\AreaExpertise');
    }



}
