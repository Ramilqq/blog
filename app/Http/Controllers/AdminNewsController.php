<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class AdminNewsController extends Controller
{
    //
    public function execute (){
    	if(view()->exists('admin.news')):
			$news = News::all();
			$data = [
				'title' => 'Страницы',
				'news' => $news,
					];
			return view('admin.news',$data);
		else:
    		abort(404);
    	endif;
    }
}
