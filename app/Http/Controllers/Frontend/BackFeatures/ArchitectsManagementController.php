<?php

namespace App\Http\Controllers\Frontend\BackFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access\User\User;
use App\Models\Aua\ArchitectProfile;
use App\Models\Aua\MemberSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentRequired;
use Auth;

class ArchitectsManagementController extends Controller
{


  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function ShowSubscriptionRequests()

  {
      //$userInfo = User::find(Auth::id())->with('email')->first();
      $user = Auth::user();
      $currentuserid=$user->id;
      $membersectionprofile=User::find($currentuserid)->MemberSection;
      //dd($membersectionprofile);


      //$subscriptionrequests= ArchitectProfile::where('member_section_id', $membersectionprofile->id)->get();
      $subscriptionrequests= DB::table('architect_profile')->where('member_section_id', '=', $membersectionprofile->id)->where('status', '<', 2 )->get();


      return view('backend.adminfeatures.architects.subscriptionrequests',['subscriptionrequests' => $subscriptionrequests]);
  }




    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function architects()
    {
      $user = Auth::user();
      $currentuserid=$user->id;
      $membersectionprofile=User::find($currentuserid)->MemberSection;

      $architects= DB::table('architect_profile')->where('member_section_id', '=', $membersectionprofile->id)->where('status', '>=', 2  )->get();


        return view('backend.adminfeatures.architects.architects',['architects' => $architects]);
    }




    public function RejectSubscriptionRequest(Request $request,$id)
    {

      $architectprofile=ArchitectProfile::find($id);
      $architectprofile->status=4;
      $architectprofile->save();
      //Mail::to($architectprofile->email)->send(new PaymentRequired($architectprofile));

      return redirect()->back()->withFlashSuccess(' This request has been rejected !');


    }


    public function ValidateSubscriptionRequest(Request $request,$id)
    {


      $architectprofile=ArchitectProfile::find($id);
      $architectprofile->status=1;
      $architectprofile->save();

      //Mail::to($architectprofile->email)->send(new PaymentRequired($architectprofile));

      return redirect()->back()->withFlashSuccess(' This request has been validated,awaiting payment !');


    }




      public function ValidateSubscriptionRequestPayment(Request $request,$id)
      {

        $architectprofile=ArchitectProfile::find($id);
        $architectprofile->status=2;
       $architectprofile->save();
     //Mail::to($architectprofile->email)->send(new PaymentRequired($architectprofile));

       return redirect()->back()->withFlashSuccess(' This request has been validated,the user will receive his password by email !');

      }


}
