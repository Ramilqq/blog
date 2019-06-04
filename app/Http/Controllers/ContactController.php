<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //
        function execute (Request $request) {
    	    	
    	if($request->isMethod('post')):
	    	$messages = [
	    		'required' => 'Поле :attribute обязательно к заполнению',
	    		'email' => 'Поле :attribute должно соответсвовать email адресу',
	    		'max' => 'Поле :attribute превышено максимальное колтчесво символов',
	    		'min' => 'Поле :attribute минимальное количесво символов',
	    		'integer' => 'Поле :attribute должны быть толко цифры',
	    	];
    	
    		$this->validate($request, [
    			'name'=>'required|max:50',
    			'email'=>'required|email',
    			'text'=>'required|max:250',
    		], $messages);
    		$data = $request->all();
    		
    		$res = Mail::send('site.email', ['data'=>$data], function($message) use ($data){
    			$mailAdmin = 'hadiev.ram@gmail.com';
    			$message->from($data['email'], $data['name']);
    			$message->to($mailAdmin)->subject('Help! SportTut');
    			
    		});
    		
    		if(count(Mail::failures()) == 0):
			    return redirect()->route('contact')->with('status', 'Сообщение отправлено, спасибо!');
			else:
    			return redirect()->route('contact')->with('status', 'Ошибка');
    		endif;
    		
    		//if($res):
    		//	return redirect()->route('home')->with('status', 'Email is send');
    		//endif;
    	endif;
		
   	   	return view('contact');
   }
}
