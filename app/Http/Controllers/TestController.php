<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test1;

class TestController extends Controller
{
    public function index()
    {
        $test1 = Test1::find(2);
        dd($test1);
    }
}
