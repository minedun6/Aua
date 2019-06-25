@extends('frontend.layouts.layout')


@section('beforefiles')
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection




 @section('pagetitle')

 <div class="page-title">

     <h1>Forum</h1>
 </div>
 @endsection


 @section('breadcrumbs')
 <ul class="page-breadcrumb breadcrumb">
     <li>
         <a href="index.html">Home</a>
         <i class="fa fa-circle"></i>
     </li>
     <li>
         <span>Forum</span>
     </li>
 </ul>
 @endsection


  @section('content')

  <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-documents font-dark"></i>
                                        <span class="caption-subject bold uppercase">List of topics</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">

                                            <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                                <input type="radio" name="options" class="toggle" id="option2">Refresh</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>

                                                <th> Title </th>
                                                <th> Author </th>
                                                <th> NB </th>
                                                <th> Last Msg </th>
                                                <th>
                                                   </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">

                                                <td> shuxer </td>
                                                <td>
                                                     shuxer@gmail.com
                                                </td>
                                                <td> 12 </td>
                                                <td class="center"> 12 Jan 2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> looper </td>
                                                <td>
                                                   looper90@gmail.com
                                                </td>
                                                <td> 120 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                      <span class="label label-sm label-danger">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> userwow </td>
                                                <td>
                                                     userwow@yahoo.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                      <span class="label label-sm label-danger">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> user1wow </td>
                                                <td>
                                                   userwow@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> restest </td>
                                                <td>
                                                     test@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-default"> </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> fooplxxxxxxxxxxxx </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 200 </td>
                                                <td class="center"> 19.11.2016 </td>
                                                <td>
                                                  <span class="label label-sm label-danger">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> weep </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 8 </td>
                                                <td class="center"> 19.11.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-success">   </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> coop </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 2 </td>
                                                <td class="center"> 19.11.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> pppol </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 9 </td>
                                                <td class="center"> 19.11.2016 </td>
                                                <td>
                                                  <span class="label label-sm label-success">   </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> test </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> userwow </td>
                                                <td>
                                                     userwow@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> test </td>
                                                <td>
                                                     test@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> goop </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.11.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> weep </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 15.11.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> toopl </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 16.11.2016 </td>
                                                <td>
                                                  <span class="label label-sm label-default">   </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> userwow </td>
                                                <td>
                                                     userwow@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 9.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> tes21t </td>
                                                <td>
                                                    test@gmail.com
                                                </td>
                                                <td> 12 </td>
                                                <td class="center"> 14.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-default">   </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> fop </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 13.11.2016 </td>
                                                <td>
                                                  <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> kop </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 17.11.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-default">   </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> vopl </td>
                                                <td>
                                                  good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.11.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> userwow </td>
                                                <td>
                                                     userwow@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> wap </td>
                                                <td>
                                                     test@gmail.com
                                                </td>
                                                <td> 70 </td>
                                                <td class="center"> 12.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-danger">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> test </td>
                                                <td>
                                                     good@gmail.com
                                                </td>
                                                <td> 20 </td>
                                                <td class="center"> 19.12.2016 </td>
                                                <td>
                                                    <span class="label label-sm label-warning">  </span> </td>

                                            </tr>

                                            <tr class="odd gradeX">

                                                <td> weep </td>
                                                <td>
                                                   good@gmail.com
                                                </td>
                                                <td> 123 </td>
                                                <td class="center"> 15.11.2016 </td>
                                                <td>
                                                      <span class="label label-sm label-danger">  </span> </td>

                                            </tr>

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
    <script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
   @endsection
