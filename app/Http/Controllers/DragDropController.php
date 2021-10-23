<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DragDropController extends Controller
{
    public function viewPage ()
    {
        return view('drag-test');
    }
    public function dragData (Request $request)
    {
        return $request->all();
    }
}
