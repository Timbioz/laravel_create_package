<?php

namespace Timbioz\Helper\Controllers;

use App\Http\Controllers\Controller;

class HelperController extends Controller {
    public function index() {
        return view("helper::index");
    }
}
