<?php

namespace App\Http\Controllers\Vitrine;

use App\Models\Aua\Country;
use App\Models\Aua\MemberSection;
use App\Models\Aua\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VitrineController extends Controller
{
    public function southAfrica(){
        $zone = Zone::where('nameEn', '=', 'south')->first();
        $countries = Country::where('zone_id', '=', $zone->id)->select('id')->get();
        $countries = $countries->pluck('id');
        $members = MemberSection::whereIn('country_id', $countries)->get();
        return view('vitrine.members.southAfrica')->with([
            'members' => $members
        ]);
    }

    public function westAfrica(){
        $zone = Zone::where('nameEn', '=', 'west')->first();
        $countries = Country::where('zone_id', '=', $zone->id)->select('id')->get();
        $countries = $countries->pluck('id');
        $members = MemberSection::whereIn('country_id', $countries)->get();
        return view('vitrine.members.southAfrica')->with([
            'members' => $members
        ]);
    }
    public function eastAfrica(){
        $zone = Zone::where('nameEn', '=', 'east')->first();
        $countries = Country::where('zone_id', '=', $zone->id)->select('id')->get();
        $countries = $countries->pluck('id');
        $members = MemberSection::whereIn('country_id', $countries)->get();
        return view('vitrine.members.southAfrica')->with([
            'members' => $members
        ]);
    }
    public function northAfrica(){
        $zone = Zone::where('nameEn', '=', 'north')->first();
        $countries = Country::where('zone_id', '=', $zone->id)->select('id')->get();
        $countries = $countries->pluck('id');
        $members = MemberSection::whereIn('country_id', $countries)->get();
        return view('vitrine.members.northAfrica')->with([
            'members' => $members
        ]);
    }
    public function profil($id){
        $member = MemberSection::with('stat','members')->find($id);
        $president = null;
        foreach ($member->members as $item){
            if($item->role == 'president')
                $president = $item;
        }
        return view('vitrine.members.parts.profil')->with([
            'member' => $member,
            'president' => $president
        ]);
    }
}
