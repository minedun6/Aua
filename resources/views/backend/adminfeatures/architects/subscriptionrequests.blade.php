@extends('backend.adminfeatures.layout.dashboard_layout')


@section('beforefiles')
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

@endsection



@section('page-header')
<div class="page-title">
    <h1>Subscription Requests List

    </h1>
</div>
@endsection

@section('breadcrumb')

<li>
    <a href="dash">Home</a>
    <i class="fa fa-circle"></i>
</li>
<li>
    <span class="active">Subscription Requests List</span>

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
                                          @foreach ($subscriptionrequests as $subscriptionrequest)
                                            <tr>
                                                <td> {{ $subscriptionrequest->name }}</td>
                                                <td> {{ $subscriptionrequest->surname }} </td>


                                                <td> {{ $subscriptionrequest->email }}</td>
                                                <td> {{ $subscriptionrequest->architect_code }} </td>

                                                @if (  $subscriptionrequest->status==0  )
                                                  <td> <span class="label label-sm label-danger"> Awaiting validation </span>  </td>


                                                @elseif (  $subscriptionrequest->status==1  )
                                                  <td> <span class="label label-sm label-warning"> Awaiting payment </span> </td>
                                                @endif

                                                <td>

                                          @if (  $subscriptionrequest->status==0  )

                                           <form id="validate1" action="subscriptionrequests/validatesubscriptionrequest/{{$subscriptionrequest->id}}" method="POST" style="display:none">
                                              {{ csrf_field() }}
                                            </form>

                                            <form id="reject" action="subscriptionrequests/rejectsubscriptionrequest/{{$subscriptionrequest->id}}" method="POST" style="display:none">
                                               {{ csrf_field() }}
                                             </form>

                                            <button form="validate1" type="submit" class="btn btn-circle btn-icon-only green" value="V" title="Validate subscription request" ></button>
                                            <button form="reject" type="submit" class="btn btn-circle btn-icon-only red" value="R" title="Reject subscription request" ></button>


                                         @elseif (  $subscriptionrequest->status==1  )

                                         <form id="validate2" action="subscriptionrequests/validatesubscriptionrequestpayment/{{$subscriptionrequest->id}}" method="POST" style="display:none">
                                            {{ csrf_field() }}
                                          </form>

                                        <button form="validate2" type="submit" class="btn btn-circle btn-icon-only yellow" title="Validate subscription request Payment" ></button>
                                          @endif

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






@endsection


@section('afterfiles')
<script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{!! asset('js/backfeatures/init.js') !!}"></script>
@endsection
