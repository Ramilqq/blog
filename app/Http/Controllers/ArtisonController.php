<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class ArtisonController extends Controller
{
    //
	public function execute ($id) {    	    			

		if(!$id):
			abort(404);
		endif;
		
		if(view()->exists('artison')):
			$news = News::where('id',strip_tags($id))->first();
			$last_page = back()->getTargetUrl();
			$data = [
					'name' => $news->name,
					'text' => $news->text,
					'image' => $news->image,
					'created_at' => $news->created_at,
					'url' => $last_page,
					//'autor' => $news->user->name,
					];

				dd($news->user->name);
				//foreach ($news as $item):
		    	//	dd($item);
		    	//endforeach;
		    	die();



			return view('artison', ['data' => $data]);
		else:
			abort(404);
		endif;  	
	}
    
}
