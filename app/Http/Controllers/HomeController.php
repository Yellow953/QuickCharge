<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function contact_us(Request $request)
    {

    }

}