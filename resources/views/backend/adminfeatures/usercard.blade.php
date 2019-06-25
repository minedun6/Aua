@extends('backend.adminfeatures.layout.dashboard_layout')


@section('beforefiles')
<link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

@endsection



@section('page-header')
<div class="page-title">
    <h1>Carte personnelle

    </h1>
</div>
@endsection

@section('breadcrumb')

<li>
    <a href="dash">Acceuil</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span class="active">Gestion de carte</span>
</li>

@endsection




@section ('content')

                     <div class="row">

                        <div class="col-md-12">
                              <!-- BEGIN PORTLET-->
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <i class="icon-edit font-dark"></i>
                                          <span class="caption-subject font-dark bold uppercase">Notes</span>
                                      </div>
                                      <div class="actions">
                                          <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                              <i class="icon-cloud-upload"></i>
                                          </a>
                                          <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                              <i class="icon-wrench"></i>
                                          </a>
                                          <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                          <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                              <i class="icon-trash"></i>
                                          </a>
                                      </div>
                                  </div>
                                  <div class="portlet-body">

                                      <div class="note note-info">
                                          <h4 class="block">Votre carte activé </h4>
                                          <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. </p>
                                      </div>
                                      <div class="note note-danger">
                                          <h4 class="block">Votre carte est en cours de traitement</h4>
                                          <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit mattis consectetur purus sit amet.\ Cras mattis consectetur purus sit amet fermentum. </p>
                                      </div>

                                      <div class="note note-warning">
                                       <h4 class="block">Vous n'avez pas commander une carte</h4>
                                       <p> <button type="button" class="btn grey-cascade">Clickez ici pour commander une carte</button> </p>
                                   </div>


                                  </div>
                              </div>
                              <!-- END PORTLET-->
                              <!-- BEGIN PROGRESS BARS PORTLET-->

                              <!-- END PROGRESS BARS PORTLET-->
                              <!-- BEGIN LABELS AND BADGES PORTLET-->

                              <!-- END THUMBNAILS PORTLET-->
                          </div>


</div>

@endsection


@section('afterfiles')
<script src="../assets/pages/scripts/ui-general.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/timeline.min.js" type="text/javascript"></script>
@endsection
