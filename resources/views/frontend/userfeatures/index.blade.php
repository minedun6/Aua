<!DOCTYPE HTML>

@extends('frontend.layouts.layout')

  @section('beforefiles')
  <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
      <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
	 @endsection



   @section('pagetitle')
   <div class="page-title">

       <h1>Welcome page </h1>
   </div>
   	 @endsection

  @section('breadcrumbs')
  <ul class="page-breadcrumb breadcrumb">
      <li>
          <a href="index.html">Home</a>
          <i class="fa fa-circle"></i>
      </li>
      <li>
          <span>Home</span>
      </li>
  </ul>
    	 @endsection




    @section('content')

    <div class="note note-info">
        <p> Involved in architecture. It is a high-performance, swift and efficient tool which makes it possible to abolish distances and borders and to establish a dialogue on a common platform. This website belongs to all architects of Africa. It reflects their vitality and that of the AUA member countries. Use the numerous hyperlinks to navigate and please do not hesitate to contact us.
          We hope that you will get all the information you are seeking and we thank you for your visit </p>
    </div>



               <div class="page-content-inner">
                            <div class="row">

                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption caption-md">
                                                <i class="icon-bar-chart font-red"></i>
                                                <span class="caption-subject font-red bold uppercase">New Members</span>
                                                <span class="caption-helper">weekly stats...</span>
                                            </div>
                                            <div class="actions">
                                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                    <label class="btn btn-transparent green btn-outline btn-circle btn-sm active">
                                                        <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                                    <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                                        <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                                    <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                                        <input type="radio" name="options" class="toggle" id="option2">Month</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="row number-stats margin-bottom-30">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="stat-left">
                                                        <div class="stat-chart">
                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                            <div id="sparkline_bar"></div>
                                                        </div>
                                                        <div class="stat-number">
                                                            <div class="title"> Total </div>
                                                            <div class="number"> 2460 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <div class="stat-right">
                                                        <div class="stat-chart">
                                                            <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                            <div id="sparkline_bar2"></div>
                                                        </div>
                                                        <div class="stat-number">
                                                            <div class="title"> New </div>
                                                            <div class="number"> 719 </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-scrollable table-scrollable-borderless">
                                                <table class="table table-hover table-light">
                                                    <thead>
                                                        <tr class="uppercase">
                                                            <th colspan="2"> MEMBER </th>
                                                            <th> Earnings </th>
                                                            <th> CASES </th>
                                                            <th> CLOSED </th>
                                                            <th> RATE </th>
                                                        </tr>
                                                    </thead>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Brain</a>
                                                        </td>
                                                        <td> $345 </td>
                                                        <td> 45 </td>
                                                        <td> 124 </td>
                                                        <td>
                                                            <span class="bold theme-font">80%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar5.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Nick</a>
                                                        </td>
                                                        <td> $560 </td>
                                                        <td> 12 </td>
                                                        <td> 24 </td>
                                                        <td>
                                                            <span class="bold theme-font">67%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar6.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Tim</a>
                                                        </td>
                                                        <td> $1,345 </td>
                                                        <td> 450 </td>
                                                        <td> 46 </td>
                                                        <td>
                                                            <span class="bold theme-font">98%</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fit">
                                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar7.jpg"> </td>
                                                        <td>
                                                            <a href="javascript:;" class="primary-link">Tom</a>
                                                        </td>
                                                        <td> $645 </td>
                                                        <td> 50 </td>
                                                        <td> 89 </td>
                                                        <td>
                                                            <span class="bold theme-font">58%</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 col-sm-6">
                                    <!-- BEGIN PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class="icon-globe font-green-sharp"></i>
                                                <span class="caption-subject font-green-sharp bold uppercase">News Feed</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1_1" class="active" data-toggle="tab"> System </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_2" data-toggle="tab"> Activities </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <!--BEGIN TABS-->
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                                        <ul class="feeds">
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> info x
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> Just now </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> info x! </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 20 mins </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> info 1. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 24 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc">  info 2 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 30 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> info 3 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 40 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-warning">
                                                                                <i class="fa fa-plus"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> info w </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 1.5 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> info 4
                                                                                <span class="label label-sm label-default "> Overdue </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 2 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc">info 5 </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 3 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-warning">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 5 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 18 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-default">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 21 hours </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> New order received. Please take care of it. </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 22 hours </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_1_2">
                                                    <div class="scroller" style="height: 290px;" data-always-visible="1" data-rail-visible1="1">
                                                        <ul class="feeds">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New order received </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> 10 mins </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-danger">
                                                                                <i class="fa fa-bolt"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> Order #24DOP4 has been rejected.
                                                                                <span class="label label-sm label-danger "> Take action
                                                                                    <i class="fa fa-share"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> 24 mins </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <div class="col1">
                                                                        <div class="cont">
                                                                            <div class="cont-col1">
                                                                                <div class="label label-sm label-success">
                                                                                    <i class="fa fa-bell-o"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> New user registered </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> Just now </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END TABS-->
                                        </div>
                                    </div>
                                    <!-- END PORTLET-->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!-- BEGIN REGIONAL STATS PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-share font-red-sunglo"></i>
                                                <span class="caption-subject font-red-sunglo bold uppercase">Regional Stats</span>
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
                                            <div id="region_statistics_loading">
                                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                                            <div id="region_statistics_content" class="display-none">
                                                <div class="btn-toolbar margin-bottom-10">
                                                    <div class="btn-group btn-group-circle" data-toggle="buttons">
                                                        <a href="" class="btn grey-salsa btn-sm active"> Users </a>
                                                        <a href="" class="btn grey-salsa btn-sm"> Orders </a>
                                                    </div>
                                                    <div class="btn-group pull-right">
                                                        <a href="" class="btn btn-circle grey-salsa btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Select Region
                                                            <span class="fa fa-angle-down"> </span>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_world"> World </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_usa"> USA </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_europe"> Europe </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_russia"> Russia </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;" id="regional_stat_germany"> Germany </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="vmap_world" class="vmaps display-none"> </div>
                                                <div id="vmap_usa" class="vmaps display-none"> </div>
                                                <div id="vmap_europe" class="vmaps display-none"> </div>
                                                <div id="vmap_russia" class="vmaps display-none"> </div>
                                                <div id="vmap_germany" class="vmaps display-none"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END REGIONAL STATS PORTLET-->
                                </div>

                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->

    	 @endsection


    @section('afterfiles')
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>

              <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
	 @endsection
