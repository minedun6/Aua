<?php

namespace App\Models\Aua;

use Illuminate\Database\Eloquent\Model;

class ArchitectProfile extends Model
{

    protected $table ='architect_profile';

    protected $fillable =['name', 'surname' ,'user_id', 'email' , 'country_id' , 'member_section_id' ,'architect_code','photo','education','vision_architect','status','cv'];

    protected $dates = ['updated_at', 'deleted_at'];



    public function professionalexperience()
       {
             return $this->hasMany('App\Models\Aua\ProfessionalExperience');
       }



    public function referenceproject()
       {
              return $this->hasMany('App\Models\Aua\ReferenceProject');
       }



    public function professionalstatus()
         {
             return $this->belongsToMany('App\Models\Aua\ProfessionalStatus','architect_expertise','architect_profile_id','area_expertise_id');
         }

     public function country()
     {
        return $this->belongsTo('App\Models\Aua\Country');
     }

     public function photo()
     {
         return $this->belongsTo('App\Models\Aua\Photo');
     }



}
