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

    public function about()
    {
        $menus = $this->getMenu();
        return view('frontend.about',compact('menus'));
    }

    public function projects()
    {
        $menus = $this->getMenu();


        return view('frontend.projects',compact('menus'));
    }

    public function services()
    {
        $menus = $this->getMenu();

        return view('frontend.services',compact('menus'));
    }

    public function contacts()
    {
        $menus = $this->getMenu();

        return view('frontend.contacts',compact('menus'));
    }
    public function getServicePage($slug)
    {
        $service = Page::all()->where('slug', $slug)->first();
        $menus = $this->getMenu();
        return view('frontend.service',compact('service','menus'));
            
    }

    public function getMenu() {
        $menu = Menu::all();
        return $menu;
    }

}
