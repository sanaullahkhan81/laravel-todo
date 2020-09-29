<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Task;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {

       $categories =  Categories::get();
        return response(['categories' => $categories], 200);

    }
}
