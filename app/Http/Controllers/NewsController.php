<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;

class NewsController extends Controller
{
	public function index()
	{
		$news = News::paginate(20);
		
		return view('news.index')->with('news', $news);
	}

	public function show($id)
	{
		$news = News::with('category', 'author')->find($id);
		
		return view('news.show')->with('news', $news);
	}
}
