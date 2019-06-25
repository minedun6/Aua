<?php

namespace App\Models\Aua;

use Illuminate\Database\Eloquent\Model;

class MemberSection extends Model
{


      protected $table ='member_section';


      protected $fillable =['name', 'country' , 'user_id' , 'main_language' , 'address' , 'email' , 'phone' , 'fax' , 'website' , 'admincontact' , 'position' ];


      protected $dates = ['updated_at', 'deleted_at'];


      public function stat(){
          return $this->hasOne('App\Models\Aua\MemberSectionStats');
      }
      public function members(){
          return $this->hasMany('App\Models\Aua\ElectedMember');
      }

}
