<?php

namespace App\Models\Aua;

use Illuminate\Database\Eloquent\Model;

class ProfessionalExperience extends Model
{


    protected $table ='professional_experience';

    protected $fillable =['architect_profile_id','date', 'employer' , 'position' , 'responsabilites' , 'main_projects' ];


    protected $dates = ['updated_at', 'deleted_at'];


}
