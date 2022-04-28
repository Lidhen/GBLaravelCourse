<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $newsList = $this->getNews();
        return view('news.index', ['newsList' => $newsList]);
    }
    public function detail($category, $id){
        $news = $this->getNews($category, $id);
        return view('news.detail', ['News' => $news]);
    }
    public function сreate(){
        return view('news.сreate');
    }
    

}
