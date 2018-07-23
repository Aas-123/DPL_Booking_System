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
                  <a href="{{route('adminwork.highlight')}}">Highlight</a>
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

                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                   

                    <form class="form-horizontal" role="form" method="POST"
                          action="{{route('highlight.edit',$high->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="feed_title">Video</label>
                            <div class="col-sm-9">
                                @if ($high->video)
                                    <video width="200" height="100" controls>
                                                <source src="{{ asset('images/Highlight/'.$high->video) }}" alt="">
                                                    </video>
                                        <input type="file" name="video" accept="video/*">
                                    @else
                                     <input type="file" name="video" accept="video/*">
                                @endif
                                
                               
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title">Video_detail</label>
                            <div class="col-sm-9">
                                <textarea name="video_detail" cols="30" rows="10" class="col-xs-10 col-sm-5">{{$high->video_detail}}</textarea>
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