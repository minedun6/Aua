@extends('backend.adminfeatures.layout.dashboard_layout')


@section('beforefiles')
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

@endsection



@section('page-header')
<div class="page-title">
    <h1>Tender's List

    </h1>
</div>
@endsection

@section('breadcrumb')

<li>
    <a href="dash">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span class="active">Tender's List</span>

</li>

@endsection




@section ('content')



                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">

                                        <span class="caption-subject bold uppercase">
                              <a class="btn red btn-outline sbold" data-toggle="modal" href="#basic"> Add a file</a
                                        </span>
                                    </div>

                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th> Date of Submission </th>
                                                <th> status</th>
                                                <th> Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> Trident </td>
                                                <td> 12/1/2017 </td>
                                                <td> active </td>
                                                <td>
                                                  <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                  <i class="fa fa-edit"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                <i class="fa fa-times"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-circle btn-icon-only grey-cascade">
                                                <i class="fa fa-link"></i>
                                                </a>
                                              </td>

                                            </tr>


                                            <tr>
                                                <td> Presto </td>
                                                <td> 12/4/2017 </td>
                                                <td> active </td>
                                                <td>
                                                  <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                                                  <i class="fa fa-edit"></i>
                                                  </a>


                                                  <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                  <i class="fa fa-times"></i>
                                                  </a>

                                                  <a href="javascript:;" class="btn btn-circle btn-icon-only grey-cascade">
                                                  <i class="fa fa-link"></i>
                                                  </a>

                                                </td>


                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->

                        </div>
                    </div>


                    <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                          <h4 class="modal-title">Submit a new file</h4>
                                      </div>
                                      <div class="modal-body">

                                        <form class="form-horizontal" role="form" method="post" action="addtender" enctype="multipart/form-data">

                                               {{ csrf_field() }}

                                      <div class="form-group">
                                         <label for="inputEmail1" class="col-md-2 control-label">Name</label>
                                         <div class="col-md-4">
                                             <input type="text" class="form-control" id="inputEmail1" placeholder="Name"> </div>
                                     </div>

                                     <div class="form-group">
                                                <label for="inputEmail1" class="col-md-2 control-label">Description</label>
                                                <div class="col-md-4">
                                                <textarea class="form-control" rows="2" ></textarea>
                                                </div>
                                     </div>

                                     <div class="form-group">
                                         <label for="inputPassword12" class="col-md-2 control-label">File</label>
                                         <div class="col-md-4">
                                             <input type="file" id="exampleInputFile1" name="pdfile">
                                     </div>
                                     </div>

                                <button type="submit" class="btn dark btn-outline" >Submit</button>

                                 </form>


                                      <div class="modal-footer">

                                          <button type="button" class="btn green" data-dismiss="modal" >Close</button>
                                      </div>
                                  </div>
                                  <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                  </div>



@endsection


@section('afterfiles')
<script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
@endsection
