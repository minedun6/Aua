@extends('backend.adminfeatures.layout.dashboard_layout')


@section('beforefiles')
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

@endsection



@section('page-header')
<div class="page-title">
    <h1>Architects List

    </h1>
</div>
@endsection

@section('breadcrumb')

<li>
    <a href="dash">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span class="active">Architects List</span>

</li>

@endsection




@section ('content')



                <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">


                                    </div>

                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> Name </th>
                                                <th> Surname </th>
                                                <th> Email </th>
                                                <th> Architect Code</th>
                                                <th> Account Status</th>
                                                <th> Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($architects as $architect)
                                            <tr>
                                                <td> {{ $architect->name }}</td>
                                                <td> {{ $architect->surname }} </td>


                                                <td> {{ $architect->email }}</td>
                                                <td> {{ $architect->architect_code }} </td>

                                                @if (  $architect->status==2  )
                                                  <td>  <span class="label label-sm label-success"> Account approved </span> </td>


                                                @elseif ( $architect->status==3 )
                                                <td> <span class="label label-sm label-default "> Account expired </span> </td>

                                                @endif


                                                <td>

                                                <a href="javascript:;" class="btn btn-circle btn-icon-only green">
                                                <i class="fa fa-times"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-circle btn-icon-only grey-cascade">
                                                <i class="fa fa-link"></i>
                                                </a>
                                              </td>

                                            </tr>



                                          @endforeach
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

                                        <form class="form-horizontal" role="form">
                                     <div class="form-group">
                                         <label for="inputEmail1" class="col-md-2 control-label">Name</label>
                                         <div class="col-md-4">
                                             <input type="email" class="form-control" id="inputEmail1" placeholder="Name"> </div>
                                     </div>
                                     <div class="form-group">
                                         <label for="inputPassword12" class="col-md-2 control-label">File</label>
                                         <div class="col-md-4">
                                             <input type="file" id="exampleInputFile1">
                                     </div>


                                 </form>

                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn dark btn-outline" data-dismiss="modal">Submit</button>
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
