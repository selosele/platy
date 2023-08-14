<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * 메인 컨트롤러
 */
class IndexController extends Controller
{
    /**
     * 메인 페이지를 출력한다.
     */
    public function page()
    {
        return view('index');
    }
}
