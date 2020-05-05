<?php


namespace App\Http\Controllers;


class TestsController
{
    function show($test)
    {
        $tests = [
            '1' => 'first',
            '2' => 'second'
        ];

        if (!array_key_exists($test, $tests)) {
            abort(404, 'literally nothing');
        }

        return view('test', [
            'test' => $tests[$test]
        ]);
    }
}
