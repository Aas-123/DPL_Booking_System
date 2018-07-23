<?php

namespace App\Http\Controllers\Fixture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Point;

class FixtureController extends Controller
{
	protected $view_path = 'admin.adminwork';

    public function matches()
    {
        $point = Point::all()->sortByDesc('point');
    	return view('pages.fixture',compact('point'));
    }

     public function points()
    {       $point = Point::all();
        return view($this->view_path.'.points',compact('point'));
      

    }


    public function edit($id)
    {
        $point = Point::find($id);
         return view('admin/model/updatepoints',compact('point'));
    }

    public function update(Request $request,$id)
    {
        $point = Point::find($id);
        $point->teams = $request->team;
        $point->played = $request->played;
        $point->won = $request->won;
        $point->draw = $request->draw;
        $point->lost = $request->lost;
        $point->point = $request->point;
        $point->save();
        return;
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
