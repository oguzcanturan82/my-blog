<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Categories;


class BlogController extends Controller
{
    function list(){
        $datas = Blog::all();
        return view('search', ['datas'=>$datas, 'categories'=>Categories::all()]);
    }
}
