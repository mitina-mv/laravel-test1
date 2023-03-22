<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test1;
use App\Services\Test1Service;

class TestController extends Controller
{
    private $testService;

    public function __construct(Test1Service $testService)
    {
        $this->testService = $testService;
    }
    
    public function index()
    {
        dd($this->testService->getAllJSON());
    }

    public function create()
    {
        return view('form.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'name' => 'string',
            'email' => 'string',
            'isActive' => 'string',
        ]);

        if(array_key_exists('isActive', $data)) {
            $data['isActive'] = true;
        } else {
            $data['isActive'] = false;
        }

        Test1::create($data);

        return redirect()->route('form.index');
    }

    public function show(Test1 $test)
    {
        return view('form.show', compact('test'));
    }

    public function edit(Test1 $test)
    {
        return view('form.edit', compact('test'));
    }

    public function update(Test1 $test)
    {
        $data = request()->validate([
            'title' => 'string',
            'name' => 'string',
            'email' => 'string',
            'isActive' => '',
        ]);

        if(array_key_exists('isActive', $data)) {
            $data['isActive'] = true;
        } else {
            $data['isActive'] = false;
        }


        $test->update($data);
        return redirect()->route('form.show', $test->id);
    }

    public function destroy(Test1 $test)
    {
        $test->delete();
        return redirect()->route('form.index');
    }
}
