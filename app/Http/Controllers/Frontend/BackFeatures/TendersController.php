<?php

namespace App\Http\Controllers\Frontend\BackFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tender;
/**
 * Class DashboardController.
 */
class TendersController extends Controller
{



  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */

  public function getall()
  {
      return view('backend.adminfeatures.tenders');
  }




   public function find_by_id($id)
   {


   }




  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $tender = new Tender();
      $tender->name = $request->name;

      if (isset($request->description)){

                $tender->description = $request->description;
            }



           if($request->hasFile('pdfile')) {

              return redirect('dash');

        }


      return redirect()->back()->withFlashSuccess('Article ajouté avec succés');


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }






}
