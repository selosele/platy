<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * 메인 컨트롤러
 */
class IndexController extends Controller
{
    public function indexView()
    {
        return view('index');
    }
}
