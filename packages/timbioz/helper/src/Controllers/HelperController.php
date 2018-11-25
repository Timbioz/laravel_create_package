<?php

namespace Timbioz\Helper\Controllers;

use App\Http\Controllers\Controller;
use Timbioz\Helper\Models\Tag;

class HelperController extends Controller {
    public function index() {

        $newTag = new Tag();
        $newTag->title = "New Tag";
        $newTag->description = "New Tag Description";
        $newTag->slug = "newtag";

        $newTag->save();

        return view("helper::index");
    }
}
