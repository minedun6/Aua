<?php

namespace App\Http\Controllers\Frontend\FrontFeatures;
use App\Http\Controllers\Controller;
use App\Models\Aua\ArchitectProfile;
use App\Models\Aua\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArchitectProfileController extends Controller
{
    public function useraccount($id)
    {
        $authId = Auth::user()->id;
        $countries = Country::all();
        return view('frontend.userfeatures.useraccount')->with([
                'authId' => $authId,
                'id' => $id,
                'countries' => $countries
            ]);

    }

    public function getUserData(){
        $data = null;
        $id = request()->id_;
        $data['resume'] =ArchitectProfile::with('country', 'professionalstatus', 'photo')->find($id);

        return response()->json($data);
    }
}
