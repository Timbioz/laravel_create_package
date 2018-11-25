<?php

namespace Timbioz\Helper\Controllers;

use App\Http\Controllers\Controller;
use Timbioz\Helper\Models\Tag;

class HelperController extends Controller {
    public function index() {

        $newTag = new Tag();

        return view("helper::index");
    }
}
