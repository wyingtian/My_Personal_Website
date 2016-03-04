<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

use App\Http\Requests;

class neighborhoodMapController extends Controller
{
    public function getNeighborhoodMap(){
        $view = View::make('neighborhood_map');
        return $view;
    }
}
