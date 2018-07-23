@extends('admin.include admin.layout')

@section('title')
Points Table
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
                	<a href="{{route('adminwork.points')}}">Points Table</a>
                </li>
            </ul><!-- .breadcrumb -->
         </div>

         <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                        Points Table
                    </small>
                </h1>
            </div><!-- /.page-header -->

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
                                            team_id
                                        </th>
                                        <th>Team Name</th>
                                        <th>
                                            Played
                                        </th>
                                        <th>
                                            Won
                                        </th>
                                        <th>Draw</th>
                                        <th>Lost</th>
                                        <th>Points</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="points">
                                        @foreach($point as $points)
                                        <tr>
                                            <td class="text-center">{{$points->id}}</td>
                                            <td>{{$points->teams}}</td>
                                            <td>{{$points->played}}</td>
                                            <td>{{$points->won}}</td>
                                            <td>{{$points->draw}}</td>
                                            <td>{{$points->lost}}</td>
                                            <td>{{$points->point}}</td>
                                            <td><button class="btn btn-primary" data-toggle="modal" data-target="#Modal1" onclick=showModal("/point/edit/{{$points->id}}")>Update</button></td>
                                            


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
        </div><!-- /.page-content -->

       </div>

  @section('scripts')
<script>

// Pointsload();

$('#Updatepoints').on('click',function(e){
    e.preventDefault();
         
});

</script>
@endsection     

  @endsection
