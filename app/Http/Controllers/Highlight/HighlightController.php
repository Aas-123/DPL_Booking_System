<?php

namespace App\Http\Controllers\Highlight;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Highlight;
use App\Http\Requests\Highlight\AddHighlightValidation;
use App\Http\Requests\Highlight\EditHighlightValidation;

class HighlightController extends Controller
{
	protected $view_path = 'admin.adminwork';
	protected $view_model = 'admin.model';
	protected $folder = 'Highlight';
    protected $folder_path;


     public function __construct()
    {
        $this->folder_path = public_path().DIRECTORY_SEPARATOR .'images' . DIRECTORY_SEPARATOR . $this->folder;
    }

    public function games()
    {
      $highlight = Highlight::all();
    	return view('pages.highlight',compact('highlight'));
    }

    public function highlight()
    {
        $highlight = Highlight::all();
    	return view($this->view_path.'.highlight',compact('highlight'));
    }

    public function addmodel()
    {

    	return view($this->view_model.'.addhighlight');

    }

    public function insert(AddHighlightValidation $req)
    {


        $video=null;
    	if($req->hasFile('video')){
    		    
            $file = $req->file('video');
            $allowedfileExtension=['mp4','MPG','WMV'];
            $video = mt_rand(1001, 9999)."_".$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            // upload video name in folder
            $file->move($this->folder_path, $video);
            $check=in_array($extension,$allowedfileExtension);

         if($check)
         {
       
        $highlight = new Highlight;
        $highlight->video = $video;
        $highlight->video_detail = $req->video_detail;
        $highlight->admin_id = Auth::id();
        $highlight->save();
        return redirect()->route('adminwork.highlight');
         }
         else
        {
             return view($this->view_model.'.addhighlight');
        }
       }

    	}


     public function view(Request $req,$id)
     {
          $high = Highlight::find($id);
        return view($this->view_model.'.edithighlight', compact('high'));
     }

     public function edit(EditHighlightValidation $request,$id)
     {
        $high = Highlight::find($id);

        if($request->hasFile('video')){
            
            $file = $request->file('video');
            $allowedfileExtension=['mp4','MPG','WMV'];
            $video = mt_rand(1001, 9999)."_".$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            // upload video name in folder
            $file->move($this->folder_path, $video);
            $check=in_array($extension,$allowedfileExtension);


              // remove old image
            if ($high->video)
                unlink($this->folder_path.DIRECTORY_SEPARATOR.$high->video);

            $high->video = $video;
           
            if($check)
         {
          $high->video = $video;
          $high->video_detail = $request->video_detail;
          $high->save();
          return redirect()->route('adminwork.highlight');
        }
        else
        {
             return view($this->view_model.'.addhighlight');
           }
        }

     }

     public function delete($id)
     {
        $high = Highlight::find($id);

         if ($high->video)
        unlink($this->folder_path.DIRECTORY_SEPARATOR.$high->video);

      $high->delete();
      
     }

        



}
