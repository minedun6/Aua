<?php

namespace App\Models\Aua;

use Illuminate\Database\Eloquent\Model;

class ReferenceProject extends Model
{


  protected $table ='reference_project';

  protected $fillable =['architect_profile_id','project_name', 'category' , 'situation' , 'components' , 'owner' , 'design_team' , 'entreprise' ,

  'missions' , 'duration_design_phase' ,'starting_date' , 'duration_construction_phase' , 'completion_date' , 'covered_area' , 'cost' , 'photo'];




  protected $dates = ['updated_at', 'deleted_at'];



}
