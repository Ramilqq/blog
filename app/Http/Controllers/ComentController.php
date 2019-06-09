<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ComentController extends Controller
{
    //
    function execute (Request $request) {

    	if($request->isMethod('post')):
    		return redirect()->route('index');
    	else:
    		abort(404);
    	endif;




    }
}
