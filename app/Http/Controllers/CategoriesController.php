<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    function list(){
        $categories = Categories::all();
        return $categories;
    }
}
