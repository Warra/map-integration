<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class MapController extends Controller
{
    use DispatchesJobs, ValidatesRequests;
    
    public function show()
    {
        return view('MapForm');
    }

}


