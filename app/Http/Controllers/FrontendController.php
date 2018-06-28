<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Project;
use App\Models\Box;
use App\Mail\SendMail;
use Mail;

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
        $projects = Project::all();
        return view('frontend.projects',compact('menus','projects'));
    }

    public function services()
    {
        $menus = $this->getMenu();

        return view('frontend.services',compact('menus'));
    }

    public function contacts(Request $request)
    {

      if($request->isMethod('post'))
      {
        $data = [
          'name' => $request->name,
          'phone' => $request->phone,
          'text' => $request->text
        ];

        $success = "<script>
                    <div>$.sweetModal({
                    content: 'Сообщение успешно отпавлено.',
                    icon: $.sweetModal.ICON_SUCCESS
                  });</div></script>";

        Mail::to('advanced315@gmail.com')->send(new SendMail($data));

        return redirect()->route('contacts')->with('status', $success);
      }

      $menus = $this->getMenu();
      return view('frontend.contacts',compact('menus'));
    }

    public function object($slug)
    {
        $menus = $this->getMenu();

        $object = Project::where('slug', $slug)->with('boxes')->first();
        $object_id = Project::where('slug', $slug)->first()->id;

        
        $box_block = $object->boxes()->where(['boxable_id'=> $object_id, 'name' => 'block'])->get();
        $box_floor = $object->boxes()->where(['boxable_id'=> $object_id, 'name' => 'floor'])->get();
        $box_plan  = $object->boxes()->where(['boxable_id'=> $object_id, 'name' => 'plan'])->get();
        $box_flat  = $object->boxes()->where(['boxable_id'=> $object_id, 'name' => 'flat'])->get();
        
        return view('frontend.object',compact('menus','object','box_floor','box_block','box_plan','box_flat'));
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

    public function test()
    {
        $menus = $this->getMenu();
        return view('frontend.object', compact('menus'));
    }

}
