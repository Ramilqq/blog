<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;


class NewsController extends Controller
{
    //
    public function execute () {
    	if(view()->exists('news')):
    		$news = News::paginate(config('settings.paginate'));
    		$news->load('user', 'coments');

    		//dump($news);

	    	foreach ($news as $item):
	    		$item['image'] = json_decode($item['image']);
	    		//dump(count($item->coments));
	    	endforeach;

	    	
	    	//die();
	   	   	return view('news',['news'=>$news]);
    	else:
			abort(404);    	
    	endif;
    }
}
