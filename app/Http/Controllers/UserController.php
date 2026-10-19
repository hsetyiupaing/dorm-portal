<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    //
    private $students = [
        'John Doe' => '1',
        'Jane Smith' => '2',
        'Alice Johnson' => '3',
        'Bob Brown' => '4',
    ];
    public function show():View
    {
        return view('table', ['students' => $this->students]);
    }
}
