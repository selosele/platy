<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * 메인 컨트롤러
 */
class IndexController extends Controller
{
    public function view()
    {
        return view('index');
    }
}
