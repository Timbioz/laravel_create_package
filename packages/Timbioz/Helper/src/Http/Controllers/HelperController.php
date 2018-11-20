<?php

namespace Timbioz\Helper\Http\Controllers;

use App\Http\Controllers\Controller;

class HelperController extends Controller {
    public function index() {
        return view("helper::index");
    }
}
