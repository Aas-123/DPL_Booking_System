@extends('admin.include admin.layout')

@section('title')
Admins
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
                        Admin Table
                    </small>
                </h1>
            </div><!-- /.page-header -->
            @if(Auth::id()==1)
             <a href="{{route('admin.addmodel')}}"><button type="button" class="btn btn-primary" id="AddFeed">Add</button></a>
             @endif

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
                                        <th>name</th>
                                        <th>
                                            email
                                        </th>
                                         @if(Auth::id()==1)<th>Action</th> @endif
                                        
                                    </tr>
                                    </thead>
                                      <tbody>
                                      	@foreach($user as $use)  
                                         <tr>
                                             <td class="text-center">{{$use->id}}</td>
                                             <td width="10px">{{$use->name}}</td>
                                             <td>{{$use->email}}</td>
                                             @if(Auth::id()==1)
                                              <td>
                                                <div class="btn-group">
      

                                                         <a href="#" class="btn btn-xs btn-danger">
                                                            <i class="icon-trash bigger-120"></i>
                                                        </a>

                                                            
                                                </div>
                                               </td>
                                               @endif

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

