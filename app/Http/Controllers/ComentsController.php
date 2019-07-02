<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coments;
class ComentsController extends Controller
{
    //
    public function welcome()
    {
        $coments = Coments::paginate(5);
        return view('welcome')->with(compact('coments'));
    }
}
