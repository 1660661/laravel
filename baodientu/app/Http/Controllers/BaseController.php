<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\chuyenmuc;
use App\chuyenmuccon;
class BaseController extends Controller
{
    //
    public function __construct()
    {
    	$cm= chuyenmuc::all();
        $cmc= chuyenmuccon::all();    

        View::share('chuyenmuc', $cm);
        View::share('chuyenmuccon', $cmc);
    }
}