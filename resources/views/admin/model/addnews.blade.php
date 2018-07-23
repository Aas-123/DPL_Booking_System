 @extends('admin.include admin.layout')

@section('title')
Add
@endsection

@section('main-view')
 <div class="main-content">
<div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try {
                    ace.settings.check('breadcrumbs', 'fixed')
                } catch (e) {
                }
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li> 

                <a href="{{'/home'}}">Dashboard</a>
                  </li>

                <li>
                  <a href="{{route('adminwork.news')}}">News Feed</a>
                </li>

                 <li>
                  <a href="#">Add</a>
                </li>
            </ul><!-- .breadcrumb -->
         </div>
          <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

                   
  
                    <form class="form-horizontal" role="form" method="POST"
                          action="{{route('admin.newsadd')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="feed_title"> Feed Title </label>
                            <div class="col-sm-9">
                                <input type="text" name="feed_title"  placeholder="Title" class="col-xs-10 col-sm-5" />
                                @if($errors->has('feed_title'))
                                    <span class="text-danger">*{{$errors->first('feed_title')}}</span> 
                                @endif
                               
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title"> News Feed</label>
                            <div class="col-sm-9">
                                <textarea name="news_feed" cols="30" rows="10" class="col-xs-10 col-sm-5"></textarea>
                                @if($errors->has('news_feed'))
                                    <span class="text-danger">*{{$errors->first('news_feed')}}</span> 
                                @endif
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title"> Image </label>
                            <div class="col-sm-9">
                                <input type="file" name="image" accept="image/*>
                                @if($errors->has('feed_image'))
                                    <span class="text-danger">*{{$errors->first('feed_image')}}</span> 
                                @endif
                            </div>
                        </div>

                        <div class="space-4"></div>


                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    Submit
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="icon-undo bigger-110"></i>
                                    Reset
                                </button>
                            </div>
                        </div>

                        <div class="hr hr-24"></div>


                    </form>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
  </div>
            
@endsection



 <!-- <div class="modal-header" style="background-image: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Add NewsFeed</h5>
        <button type="button" class="close text-primary" data-dismiss="modal" aria-label="Close" style="margin-top: -20px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
       <form id="NewsForm" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name" class="col-form-label">Feed_Title</label>
        <input type="text" class="form-control bg-light" name="feed_title">
      </div>  

       
      <div class="form-group">
        <label for="address" class="col-form-label">News_Feed</label>
        <textarea class="form-control bg-light" rows="5" name="news_feed"></textarea>
      </div>  

       
      <div class="form-group">
        <label for="email" class="col-form-label">Feed_Image</label>
        <input type="file" class=" bg-light" name="image">
      </div>  
    </form>
      </div>
<div class="modal-footer" style="background-image: linear-gradient(-20deg, #616161 0%, #9bc5c3 100%);">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="button" id="InsertNews"  class="btn btn-success">Add</button>
  
</div> -->
    