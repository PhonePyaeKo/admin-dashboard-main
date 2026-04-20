<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Section;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::where('status','active')->orderBy('sort')->get();
        $sections = Section::where('menu_id',1)->where('status','active')->orderBy('sort')->get();

        return view('frontend.home', compact('menus','sections'));
    }
}
