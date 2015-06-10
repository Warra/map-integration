<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class MapController extends Controller
{
    use DispatchesJobs, ValidatesRequests;
}

public function show()
{
    return view('MapForm');
}
