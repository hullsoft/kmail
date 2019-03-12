<?php

namespace HullSoft\Seat\Kmail\Http\Controllers;

use Seat\Web\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use HullSoft\Seat\Kmail\Helpers\Helper;

/**
 * Class HomeController
 * @package Author\Seat\YourPackage\Http\Controllers
 */
class ShowController extends Controller {

    public function getShow() {
        $list = [];
       
        return view('kmail::index', compact('list'));
    }





   

}
