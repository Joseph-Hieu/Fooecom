<?php

namespace Fooecom\Sample;

use App\Http\Controllers\Controller;

Class SampleController extends Controller
{

    public function index()
    {
        return view('sample::index', array());
    }

}
