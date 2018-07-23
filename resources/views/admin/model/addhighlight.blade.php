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
                  <a href="{{route('highlight.add')}}">Highlight</a>
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
                     

                    <form class="form-horizontal" role="form" method="POST"
                          action="{{route('highlight.insert')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="feed_title">Video</label>
                            <div class="col-sm-9">
                                 <input type="file" name="video" accept="video/*">
                                  @if($errors->has('video'))
                                    <span class="text-danger">*{{$errors->first('video')}}</span> 
                                @endif
                               
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title">Video_detail</label>
                            <div class="col-sm-9">
                                <textarea name="video_detail" cols="30" rows="10" class="col-xs-10 col-sm-5">
                                </textarea>
                                 @if($errors->has('video_detail'))
                                    <span class="text-danger">*{{$errors->first('video_detail')}}</span> 
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

