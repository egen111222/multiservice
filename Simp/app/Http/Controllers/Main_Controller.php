<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class Main_Controller extends Controller
{
    

	function index(Request $request){
		
		if($request->session()->has('articles')==null){
			return view('articles/main_page');
		}
		return redirect()->route('Article.index');
	}

	function logon(Request $request){
		$request->session()->flush();
		return redirect()->route('main_page');
	}

	function remove($id){
		Article::where('id',$id)->delete();
		return redirect()->route('Article.index');
	}

	function update($id,Request $request){
		Article::where('id',$id)->delete();
		Article::insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'body' => $request->input('body'),
            'created_at' => date('Ymd'),
            'updated_at' => date('Ymd')
        ]);
        return redirect()->route('Article.index');
	}


}
