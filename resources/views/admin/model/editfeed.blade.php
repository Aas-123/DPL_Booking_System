 @extends('admin.include admin.layout')

@section('title')
Edit
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
                  <a href="{{route('adminwork.news')}}">Highlight</a>
                </li>

                 <li>
                  <a href="#">Edit</a>
                </li>
            </ul><!-- .breadcrumb -->
         </div>
          <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                   

                    <form class="form-horizontal" role="form" method="POST"
                          action="{{route('news.edit',$news->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="feed_title"> Feed Title </label>
                            <div class="col-sm-9">
                                <input type="text" name="update_title"  placeholder="Title" class="col-xs-10 col-sm-5" / value="{{$news->feed_title}}">
                               
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title"> News Feed</label>
                            <div class="col-sm-9">
                                <textarea name="update_feed" cols="30" rows="10" class="col-xs-10 col-sm-5">{{$news->news_feed }}</textarea>
                            </div>
                        </div>

                        <div class="space-4"></div>

                       <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title"> Image </label>
                            <div class="col-sm-9">
                                @if ($news->feed_image)
                                    <img  src="{{ asset('images/News/'.$news->feed_image) }}" alt="" style="width:230px;">
                                       <input type="file" name="image">
                                    @else
                                    <input type="file" name="image">
                                @endif
                            </div>
                        </div>

                        <div class="space-4"></div>


                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-primary" type="submit">
                                    <i class="icon-ok bigger-110"></i>
                                    Update
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


