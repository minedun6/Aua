<?php

namespace App\Http\Controllers\Frontend\FrontFeatures;

use App\Http\Controllers\Controller;
use App\Models\Aua\ArchitectProfile;
use App\Models\Aua\Country;
use App\Models\Aua\MemberSection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
/**
 * Class RegistrationController.
 */
class RegistrationController extends Controller
{



  public function showRegistration()
  {

      $membersections= MemberSection::all();
      $countries = Country::all();

      return view('vitrine.register',[
          'membersections' => $membersections,
          'countries' => $countries
      ]);
  }






  public function registeraction(Request $request)
  {

     $architectprofile=new ArchitectProfile();

     $mail_check = ArchitectProfile::where('email',$request->email)->get();


     if (count($mail_check) == 0)
     {
     $architectprofile->name  = $request->name;
     $architectprofile->surname  = $request->surname;
     $architectprofile->email = $request->email;
     $architectprofile->country_id  = $request->country_id;
     $architectprofile->member_section_id = $request->member_section_id;
     $architectprofile->architect_code  = $request->architect_code;
     $architectprofile->status=0;

     $architectprofile->save();

     return response()->json([
         'msg' =>' your request has been submitted,an email has been sent to your address !',
         'success' => true
     ]);

   }

   return response()->json([
       'msg' =>' the mail adress you have submitted is already used,try another one !',
       'success' => false
   ]);

  }




}
