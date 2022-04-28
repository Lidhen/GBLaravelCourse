<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $items = $this->getCategories();
        return view('categories.index', ['categories' => $items]);
    }
    public function detail($id){
        $item = $this->getCategories($id);
        return view('categories.detail', ['category' => $item, 'news' => $item['news']]);
    }
}
