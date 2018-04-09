<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;

class FrontendController extends Controller
{


    public function index()
    {
        $menus = $this->getMenu();
        $pages = Page::take(3)->get();
        return view('frontend.index',compact('menus','pages'));
    }

    public function getServicePage($slug)
    {
        $service = Page::all()->where('slug', $slug)->first();
        $menus = $this->getMenu();

        return view('frontend.services',compact('service','menus'));
            
    }

    public function getMenu() {
        $menu = Menu::all();
        return $menu;
    }

}
