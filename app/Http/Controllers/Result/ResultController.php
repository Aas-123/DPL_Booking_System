<?php

namespace App\Http\Controllers\Result;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Result;




class ResultController extends Controller
{

	 protected $view_path = 'admin.adminwork';

    public function index()
    {
        $result = Result::all();
    	return view('pages.result',compact('result'));
    }

    public function result()
    {
    	return view($this->view_path.'.result');

    }

    public function show()
    {
    	
    	return Result::all();

    }


    public function addmodel()
    {
    	return view('admin/model/addresult');
    }


    public function insert(Request $request)
    {
        $result = new Result;
        $result->team1 = $request->team1;
        $result->team2 = $request->team2;
        $result->result_detail = $request->result;
        $result->admin_id = Auth::id();
        $result->save();
        return $result;
    }

    public function delete($id)
    {
        Result::find($id)->delete();

   }


}
