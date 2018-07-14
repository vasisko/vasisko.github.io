<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
     /**
         * Serve up the index of my site
         * @method Index
         * @return view
         */
    public function index() {
        $site_title ="About ";
        return view('about', compact('site_title'));
    }
}
