<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\NewsFeed;
use App\Http\Requests\NewsFeed\AddFeedValidation;
use PDF;
use App\Booking;


class IndexController extends Controller
{
	protected $view_path = 'admin.adminwork';
    protected $model_path = 'admin.model';
    protected $folder = 'News';
    protected $folder_path;

      public function __construct()
    {
        $this->folder_path = public_path().DIRECTORY_SEPARATOR .'images' . DIRECTORY_SEPARATOR . $this->folder;
    }

    public function index()
    {
      $news = NewsFeed::all();
      return view('index', compact('news'));
    }


    public function news()
    {
        $news = NewsFeed::all();
    	return view($this->view_path.'.newsfeed',compact('news'));
    }

    public function addmodel()
    {
      return view('admin/model/addnews');
    }

   

    public function show()
    {
        return NewsFeed::all();

    }

    public function insert(AddFeedValidation $request)
    {

       $image = null;
        if ($request->hasFile('image')) {
            $allowedfileExtension=['gif','jpg','PNG'];
            $file = $request->file('image');
            $image = mt_rand(1001, 9999)."_".$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();


            // upload image name in folder
            $file->move($this->folder_path, $image);
            $check=in_array($extension,$allowedfileExtension);


        if($check)
          {
        $news = new NewsFeed;
        $news->feed_title = $request->feed_title;
        $news->news_feed = $request->news_feed;
        $news->feed_image = $image;
        $news->admin_id = Auth::id();
        $news->save();
        return redirect()->route('adminwork.news');
        }
        else
        {
             return view('admin/model/addnews');
        }

       }

     }

     public function edit($id)
     {
        $news = NewsFeed::find($id);
        return view($this->model_path.'.editfeed', compact('news'));

     }

     public function view($id)
     {
         $news = NewsFeed::find($id);
          return view('admin/model/editfeed',compact('news'));

     }

     public function editfeed(Request $request,$id)
     {

             $new = NewsFeed::find($id);

       if ($request->hasFile('image')) {

             
            $file = $request->file('image');
            $image = mt_rand(1001, 9999)."_".$file->getClientOriginalName();

            // upload image name in folder
            $file->move($this->folder_path, $image);

            // remove old image
            if ($new->feed_image)
                unlink($this->folder_path.DIRECTORY_SEPARATOR.$new->feed_image);

            $new->feed_image = $image;
        }

       
       $new->feed_title = $request->update_title;
       $new->news_feed = $request->update_feed;
       $new->feed_image = $new->feed_image;
       $new->save();
       return redirect()->route('adminwork.news');

     }

     public function delete($id)
     {

      $new = NewsFeed::find($id);

       if ($new->feed_image)
        unlink($this->folder_path.DIRECTORY_SEPARATOR.$new->feed_image);

      $new->delete();
      return redirect()->route('adminwork.news');


      }

      public function usermanul()
      {
        $pdf = PDF::loadview('manual');
        return $pdf->download('manual.pdf');
      }

      public function customerhome()
      {
      $seat = Booking::all();
      $token = mt_rand(1001, 9999);
        return view('customerhome',compact('seat','token'));
      }
}
