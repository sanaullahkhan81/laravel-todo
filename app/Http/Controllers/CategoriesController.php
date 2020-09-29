<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Task;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {

       return  Categories::get();

    }
}
