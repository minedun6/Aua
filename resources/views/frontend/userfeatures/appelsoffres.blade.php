@extends('frontend.layouts.layout')


@section('beforefiles')

<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
 @endsection



 @section('pagetitle')
 <div class="page-title">

     <h1>Tenders</h1>
 </div>
   @endsection

@section('breadcrumbs')
<ul class="page-breadcrumb breadcrumb">
    <li>
        <a href="index.html">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Tenders</span>
    </li>
</ul>
     @endsection


  @section('content')


      <div class="m-heading-1 border-green m-bordered">
                               <h3>tenders list</h3>


                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                   <div class="portlet light ">
                                       <div class="portlet-title">
                                           <div class="caption font-dark">
                                               <i class="icon-settings font-dark"></i>
                                               <span class="caption-subject bold uppercase"></span>
                                           </div>
                                           <div class="tools"> </div>
                                       </div>
                                       <div class="portlet-body">
                                           <table class="table table-striped table-bordered table-hover" id="sample_1">
                                               <thead>
                                                   <tr>
                                                     <th> Title </th>
                                                     <th> Date of submission </th>
                                                     <th> country </th>
                                                     <th> client </th>

                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td> Trident </td>
                                                       <td> 12/1/2016 </td>
                                                       <td> tun </td>
                                                       <td> 4 </td>

                                                   </tr>

                                                   <tr>
                                                       <td> Trident </td>
                                                       <td> 12/1/2016 </td>
                                                       <td> tun </td>
                                                       <td> 7 </td>

                                                   </tr>


                                                   <tr>
                                                       <td> Presto </td>
                                                       <td> 12/1/2016 </td>
                                                       <td> DS </td>
                                                       <td> 8.5 </td>

                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                                   <!-- END EXAMPLE TABLE PORTLET-->
                                   <!-- BEGIN EXAMPLE TABLE PORTLET-->

                                   <!-- END EXAMPLE TABLE PORTLET-->
                               </div>
                           </div>




 @endsection

  @section('afterfiles')
  <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
  <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
  <script src="../assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
  @endsection
