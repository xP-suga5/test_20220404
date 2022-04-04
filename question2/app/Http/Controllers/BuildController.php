<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index()
    {
        return "建物です。";
    }

    public function index2($room)
    {
        $item = [
            'room' => $room
        ];
        return view('index', $item);
    }
}
