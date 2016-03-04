<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

use App\Http\Requests;

class FroggerPageController extends Controller
{
    public function getFrogger(){
        $view = View::make('frogger');
        return $view;
    }
}
