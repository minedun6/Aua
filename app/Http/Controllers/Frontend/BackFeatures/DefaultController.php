<?php

namespace App\Http\Controllers\Frontend\BackFeatures;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DefaultController extends Controller
{




  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index()
  {
      return view('backend.adminfeatures.dash');
  }





  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function userprofile()
  {
      return view('backend.adminfeatures.userprofile');
  }


  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function usercard()
  {
      return view('backend.adminfeatures.usercard');
  }






}
