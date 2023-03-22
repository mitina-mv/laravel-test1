<?php

namespace App\Services;

use App\Models\Test1;

class Test1Service
{
    public function getAllJSON()
    {
        $tests = Test1::all();

        return json_encode($tests);
    }
}