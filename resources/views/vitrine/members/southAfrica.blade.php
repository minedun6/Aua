@extends('vitrine.layouts.master')
@section('second-header')
    <section style="background-image:url({{ asset('assets/frontend/pic/members/banner1.jpg')}});" class="breadcrumbs">
        <div class="container">
            <div class="text-center breadcrumbs-item " >
                <h1 style="color: #E0F2F1">Central Africa</h1>
                <h4 style="color: #E0F2F1"> Central African Member States</h4>
            </div>
        </div>
    </section>
@endsection
@section('page-class')
    page
@endsection
@section('beforefiles')
    <link rel="stylesheet" href="{{ asset('assets/pages/css/invoice-2.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/pages/css/dashboardstats.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/pages/css/profile.min.css') }}" type="text/css">
@endsection
@section('content')
    <div class="container">
        <div class="row cws-multi-col">
            @foreach($members as $member)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- portfolio item-->
                    <div class="portfolio-item text-center">
                        <!-- media-->
                        <div class="pic"><img src="{{ asset('assets/frontend/pic/members/egypt.jpg') }}" data-at2x="{{ asset('assets/frontend/pic/members/egypt.jpg') }}" alt>
                            <!-- item content -->
                            <div class="item-content">
                                <h3 class="portfolio-title" style="width: 70%">{{ $member->name }}</h3>
                                <div class="categories"><a href="#">{{ $member->website }}</a></div>
                                <div class="links"><a data-id="{{ $member->id }}" data-toggle="modal" data-target="#detail" class="link-icon flaticon-tool"></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- ! portfolio item-->
                </div>
            @endforeach


        </div>
        <!-- pagination-->

        <!-- ! pagination-->
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="detail" width="80%">
        <div class="modal-dialog" role="document" style="width: 70%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="Mtitle">Member section details</h4>
                </div>
                <div class="modal-body">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

@section('script')
    <script>
        $(function () {
            $('#detail').on('shown.bs.modal' , function (e) {
                var id = $(e.relatedTarget).attr('data-id');
                $('#profil-wrapper').addClass('hidden')
                $('#profil-spinner').removeClass('hidden')

                $('#detail').find('.modal-body').load('/members/profil/'+id, function (res) {


                    setTimeout(function () {
                        $('#profil-spinner').addClass('hidden')
                        $('#profil-wrapper').removeClass('hidden')

                    },1000)
                });
            })
        })
    </script>
    @endsection
