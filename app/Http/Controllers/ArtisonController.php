<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Coments;

class ArtisonController extends Controller
{
    //
	public function execute ($id) {    	    			

		if(!$id):
			abort(404);
		endif;
		if($news = News::where('id',strip_tags($id))->first()):
			if(view()->exists('artison')):
				$news->load('user', 'coments');
				//$news = News::where('id',strip_tags($id))->first();
				$last_page = back()->getTargetUrl();
				$data = [
						'id' => $news->id,
						'name' => $news->name,
						'text' => $news->text,
						'image' => json_decode($news->image),
						'created_at' => $news->created_at,
						'url' => $last_page,
						'autor' => $news->user->name,
						'com' => $news->coments->groupBy('parent_id'),
						'coments' => $news->coments->load('users'),
						];

					/*foreach ($data['coments'] as $item):
			    		($item->load('users'));
			    		dump($item->users->name);
			    	endforeach;
			    	die();
					*/


				return view('artison', ['data' => $data]);
			else:
				abort(404);
			endif;  	
		else:	
			abort(404);
		endif;

	}
    
}
