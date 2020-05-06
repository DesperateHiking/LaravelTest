<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Test;

class TestsController
{
    function show($id)
    {
        $test = Test::where('id', $id)->firstOrFail();


        return view('test', compact('test'));
    }
}
