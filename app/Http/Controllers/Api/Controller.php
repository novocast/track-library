<?php

namespace App\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

//use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function response($data, $status) {

        return response()->json($data, $status);
    }
}
