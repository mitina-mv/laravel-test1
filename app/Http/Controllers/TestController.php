<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test1;

class TestController extends Controller
{
    public function index()
    {
        // $test1 = Test1::find(2); // получаем запись с id = 2
        // $test1s = Test1::all(); // коллекция из всех записей в таблице
        $test1s = Test1::where('isActive', 1)->get(); //  коллекция по запросу select * from table where isActive = 1
        $test1 = Test1::where('isActive', 1)->first(); // первый элемент по запросу аналог. предыд.
        foreach($test1s as $test)
        {
            dump($test->title);
        }
        dd($test1->title);
    }

    public function create()
    {
        $arr = [
            [
                'title' => 'title new',
                'name' => 'name' . uniqid(),
                'email' => uniqid(),
                'isActive' => 1
            ],
            [
                'title' => 'title 2',
                'name' => 'name' . uniqid(),
                'email' => uniqid(),
                'isActive' => 1
            ],
            [
                'title' => 'title 3',
                'name' => 'name' . uniqid(),
                'email' => uniqid(),
                'isActive' => 1
            ]
        ];

        foreach($arr as $t)
        {
            Test1::create($t);
        }

        dd('created');
    }

    public function update()
    {
        $test = Test1::find(1);

        $test->update([
            'name' => $test->name . " (update)"
        ]);
    }

    public function delete()
    {
        $test = Test1::find(2);
        // $test = Test1::withTrashed()->find(2); // ищет даже среди мягко удаленых
        // мягкое удаление, т.к. создан атрибут удаления
        $test->delete();
        // проставляется атрибут delete_at, который обозначает, что запись удалена
        // однако она остается в таблице и ее можно установить
        // но laravel будет считать, что ее нет.
        // чтобы найти ее, нужно у модели вызвать стат. метод withTrashed() 

        // когда запись из "мусорки" будет найдена, можно вызвать restore() и восстановить запись
        // будет удалено значение из атрибута delete_at
    }

    // комбинированные методы - когда нужно создать если нет и что-то сделать если запись есть
    // firstOrCreate

    public function firstOrCreate()
    {
        $arr = [
            'title' => 'title new 11',
            'name' => 'name' . uniqid(),
            'email' => uniqid(),
            'isActive' => 1
        ];

        $test = Test1::firstOrCreate(
            [
                'email' => '6416c81a6b071' // а эта запись была удалена в delete :)
            ],
            $arr
        );

        dump($test);
    }

    // updateOrCreate
    public function updateOrCreate()
    {
        $arr = [
            'title' => 'title update from record id 1'
        ];

        $test = Test1::updateOrCreate(
            [
                'email' => '6416c81a6b06f'
            ],
            $arr
        );

        dump($test->title);
    }
}
