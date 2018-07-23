@extends('admin.include admin.layout')

@section('title')
Highlights
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
            </ul><!-- .breadcrumb -->
         </div>
            <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                        Highlight Table
                    </small>
                </h1>
            </div><!-- /.page-header -->
            
             <a href="{{route('highlight.add')}}"><button type="button" class="btn btn-primary" id="AddFeed">Add</button></a>

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
         
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            id
                                        </th>
                                        <th>video</th>
                                        <th>
                                            video_detail
                                        </th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                      <tbody id="loadNews">
                                      @foreach($highlight as $high)  
                                         <tr>
                                             <td>{{$high->id}}</td>
                                             <td class="text-center">
                                                <video width="200" height="100" controls>
                                                <source src="{{ asset('images/Highlight/'.$high->video) }}" alt="">
                                                    </video>
                                                    </td>
                                             <td>{{$high->video_detail}}</td>
                                             
                                              <td>
                                                <div class="btn-group">
                                                     <a href="{{route('highlight.view',$high->id)}}" class="btn btn-xs btn-success">
                                                            <i class="icon-eye-open bigger-120"></i>
                                                        </a>

                                                         <a href="{{route('highlight.delete',$high->id)}}" class="btn btn-xs btn-danger">
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



