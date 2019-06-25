@extends('backend.adminfeatures.layout.dashboard_layout')

@section('beforefiles')
    <link rel="stylesheet" href="{{ asset('assets/pages/css/invoice-2.css') }}" type="text/css">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-briefcase font-yellow-casablanca"></i>
                        <span class="caption-subject bold font-yellow-casablanca uppercase"> {{ $member->name }} </span>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="invoice-content-2 bordered" style="padding: 10px 70px;">
                        <div class="row invoice-cust-add" style="margin-bottom: 0px">
                            <div class="col-xs-3">
                                <h2 class="invoice-title uppercase">Name</h2>
                                <p class="invoice-desc">{{ $member->name }}</p>
                            </div>
                            <div class="col-xs-3">
                                <h2 class="invoice-title uppercase">Contact</h2>
                                <p class="invoice-desc">{{ $member->admincontact }}</p>
                            </div>
                            <div class="col-xs-6">
                                <h2 class="invoice-title uppercase">Address</h2>
                                <p class="invoice-desc inv-address">{{ $member->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row list-separated profile-stat">
                                <div class="col-md-6 col-sm-4 col-xs-9">
                                    <div class="uppercase profile-stat-title"> {{ $member->stat->total_members }} </div>
                                    <div class="uppercase profile-stat-text"> Total Number of Members </div>
                                </div>
                                <div class="col-md-6 col-sm-4 col-xs-9">
                                    <div class="uppercase profile-stat-title"> {{ $member->stat->total_schools }} </div>
                                    <div class="uppercase profile-stat-text"> Number of Architecture schools</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Members-->

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <div class="portlet light ">
                                @foreach($electedMembers as $auaMember)
                                    <div>
                                        <h4 class="profile-desc-title">{{ $auaMember->name }}</h4>
                                        <span class="profile-desc-text"> {{$auaMember->aua_position}} </span>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-mail-forward"></i>
                                            <a href="http://www.keenthemes.com">{{$auaMember->email1}}</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-phone"></i>
                                            <a href="http://www.twitter.com/keenthemes/">{{$auaMember->phone1}}</a>
                                        </div>
                                        <div class="margin-top-20 profile-desc-link">
                                            <i class="fa fa-fax"></i>
                                            <a href="http://www.facebook.com/keenthemes/">{{$auaMember->fax}}</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection