<?php

namespace App\Http\Controllers\Frontend\BackFeatures;

use App\Http\Controllers\Controller;
use App\Models\Aua\ElectedMember;
use App\Models\Aua\MemberSection;
use Illuminate\Http\Request;
use App\Tender;
/**
 * Class DashboardController.
 */
class MemberSectionController extends Controller
{
        public function Profil($id)
        {
            $member = MemberSection::with('stat')
                ->find($id);
            $positions = ['president', 'secretary', 'trisory'];


            $elected_members = ElectedMember::where('member_section_id' , '=' , $member->id)->whereIn('aua_position' , $positions)->get();
            return view('backend.adminfeatures.memberSection.profil')->with([
                'member' => $member,
                'electedMembers' => $elected_members
            ]);
        }
}