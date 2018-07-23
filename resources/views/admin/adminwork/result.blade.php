@extends('admin.include admin.layout')

@section('title')
Result
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
                	<a href="{{route('adminwork.result')}}">Result</a>
                </li>
            </ul><!-- .breadcrumb -->
         </div>

           <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                        Result Table
                    </small>
                </h1>
            </div><!-- /.page-header -->

              <button class="btn btn-success" id="Try" data-toggle="modal" data-target="#Modal1">Add</button>

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
                                        <th>Team1</th>
                                        <th>
                                            Team2
                                        </th>
                                        <th>
                                            Result detail
                                        </th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody id="ResultTask">
                                       
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
loadTask();


$('#Try').on('click',function(e){
        e.preventDefault();
         showModal('/result/addmodel');

      });

</script>
@endsection

@endsection



