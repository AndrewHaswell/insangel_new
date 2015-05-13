<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Libraries\Navigation;
use Illuminate\Http\Request;

class GigsController extends Controller
{

  /**
   * @return \Illuminate\View\View
   * @author Andrew Haswell
   */

  public function index()
  {
    $title = 'Gigs';
    $navigation = Navigation::navigation();
    $message = 'Shit goes here';
    return view('gigs')->with(compact('title', 'navigation', 'message'));
  }

  /**
   * @return $this
   * @author Andrew Haswell
   */

  public function test()
  {
    $title = 'Test';
    $navigation = Navigation::navigation();
    $message = 'More hit goes here';
    return view('gigs')->with(compact('title', 'navigation', 'message'));
  }
}
