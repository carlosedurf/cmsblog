<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Page Home
     *
     * @return void
     */
    public function __invoke()
    {
        return view('site.home.index');
    }
}
