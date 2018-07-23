@extends('admin.include admin.layout')

@section('title')
News Feed
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
            </ul><!-- .breadcrumb -->
         </div>
            <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                        News Feed Table
                    </small>
                </h1>
            </div><!-- /.page-header -->
            
             <a href="{{route('admin.add')}}"><button type="button" class="btn btn-primary" id="AddFeed">Add</button></a>

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
         
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-1" class="table table-striped table-bordered table-hover table borderless">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            id
                                        </th>
                                        <th>Feed_Title</th>
                                        <th>
                                            News_Feed
                                        </th>
                                        <th>
                                            Feed_Image
                                        </th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody id="loadNews">
                                      @foreach($news as $new)  
                                         <tr>
                                             <td class="text-center" width="10px;">{{$new->id}}</td>
                                             <td width="10px;">{{$new->feed_title}}</td>
                                             <td class="abbreviation">{{$new->news_feed}}</td>
                                             <td width="20px;"><img width="100px" src="{{ asset('images/News/'.$new->feed_image) }}" alt=""></td>
                                              <td width="40px;">
                                                <div class="btn-group">
                                                     <a href="{{ route('news.view', $new->id) }}" class="btn btn-xs btn-success">
                                                            <i class="icon-eye-open bigger-120"></i>
                                                        </a>

                                                         <a href="{{ route('news.delete', $new->id) }}" class="btn btn-xs btn-danger">
                                                            <i class="icon-trash bigger-120"></i>
                                                        </a>

                                                            
                                                </div>
                                               </td>

                                                   </tr>
                                                       @endforeach



                                   
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /span -->
                    </div><!-- /row -->
                



                    <div class="hr hr-18 dotted hr-double"></div>

                </div><!-- /.col -->
            </div><!-- /.row -->
    </div>
   
 @endsection
