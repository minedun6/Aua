<?php

namespace App\Models\Aua;

use Illuminate\Database\Eloquent\Model;

class ProfessionalStatus extends Model
{

   protected $table ='professional_status';

   protected $fillable =['architect_profile_id','status','date','employer','position','responsibilities','projects'];

   protected $dates = ['updated_at', 'deleted_at'];




   public function architectureprofile()
     {
         return $this->belongsToMany('App\Models\Aua\ArchitectProfile','architectprofile_expertise','area_expertise_id','architect_profile_id');
     }








}
