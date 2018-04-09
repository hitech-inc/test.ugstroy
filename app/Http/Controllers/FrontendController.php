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
        $service = Page::first();
        $services = Page::take(4)->get();
        return view('frontend.index',compact('menus','services','service'));
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
