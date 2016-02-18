<?php

namespace Hirarky\Packagetut;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class EchoController extends Controller
{
    //

    public function index($timezone){
        return Carbon::now($timezone)->toDateTimeString();
    }
}
