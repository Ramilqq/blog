<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class IndexController extends Controller
{
    //
        function execute () {   

        	if(view()->exists('index')): 	    			
		    	/*
		    	*подключение к БД
		    	*/
		    	$news = News::all();

		    	foreach ($news as $item):
		    		$item['image'] = json_decode($item['image']);
		    	endforeach;


	/*
		    	foreach ($news as $item):
		    		dd($item->user->name);
		    	endforeach;
		    	dd($news);

		    	die();
	*/
				//date("Y-m-d", strtotime($item['created_at'])); // переводит в новый формат

		   	   	return view('index',['news'=>$news]);	
			else:
				abort(404);
			endif;
		}
}
