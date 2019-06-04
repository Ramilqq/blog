<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Validator;

class AdminNewsEditController extends Controller
{
    //
    public function execute ($id, Request $request){
	
	$news = News::find($id);

	if($request->isMethod('delete')):
		$news->delete();
		return redirect()->route('admin')->with('status', 'Страница удалена');
	endif;

	if($request->isMethod('post')):
		$input = $request->except('_token');

		$validator = Validator::make($input,[
    			'name' => 'required|max:200',
    			'title' => 'required|max:200',
    			'desc' => 'required',
    			'text' => 'required',
    			//'name' => 'required|max:100|unique,news,name,'.$input['id'],
		]);
		if($validator->fails()):
			return redirect()
				->route('adminnewsedit', ['id'=>$input['id']])
				->withErrors($validator);
		endif;

		if($request->hasFile('image')):
			$file = $request->file('image');
			$file->move(public_path().'/image/',$file->GetClientOriginalName());
			$input['image'] = $file->GetClientOriginalName();
		else:
			$input['image'] = $input['oldimage'];
		endif;
		unset($input['oldimage']);

		$news->fill($input);
	    if($news->update()):
			return redirect()->route('admin')->with('status', 'Страница изменена');
		endif;
	endif;

	
	$old = $news->toArray();
	if(view()->exists('admin.newsedit')):
		$data = ['title'=>'title',
				'data' => $old,
				];
		return view('admin.newsedit',$data);
	endif;

	}
}
