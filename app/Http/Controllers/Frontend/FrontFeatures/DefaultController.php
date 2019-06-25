<?php

namespace App\Http\Controllers\Frontend\FrontFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
      return view('frontend.userfeatures.index');
  }



   /**
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */

  public function offre()
  {
      return view('frontend.userfeatures.offre');
  }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */


  public function appelsoffres()
  {
    return view('frontend.userfeatures.appelsoffres');

  }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */





  public function forum()
  {
      //dd(Auth::user());
    return view('frontend.userfeatures.forum');

  }



}
