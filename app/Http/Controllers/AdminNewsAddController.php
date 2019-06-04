<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\News;

class AdminNewsAddController extends Controller
{
    //
    public function execute (Request $request){

    	if($request->isMethod('post')):
    		$input = $request->except('_token');
    		
    		$validator = Validator::make($input, [
    			'name' => 'required|max:200',
    			'title' => 'required|max:200',
                'desc' => 'required',
    			'text' => 'required',
                'image' => 'required',
    		]);
    		if($validator->fails()):
    			return redirect()->route('adminnewsadd')->withErrors($validator)->withInput();
    		endif;

    		if($request->hasFile('image')):
	    		$file = $request->file('image' );
	    		$input['image'] = $file->GetClientOriginalName();
	    		$file->move(public_path().'/image/',$input['image']);
    		endif;
    		
    		$news = new News();
    		$news->fill($input);
    		if($news->save()):
    			return redirect()->route('admin')->with('status', 'Страница добавлена');
    		endif;
    	endif;

	if(view()->exists('admin.newsadd')):
		$data = [
			'title' => 'новая страница',
				];
		return view('admin.newsadd',$data);
	else:
		abort(404);
	endif;
    }
}
