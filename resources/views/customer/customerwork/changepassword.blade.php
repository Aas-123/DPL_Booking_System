@extends('customer.include customer.layout')

@section('title')
Change passowrd
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

                <a href="{{'/customer/home'}}"">Dashboard</a>
                  </li>

                <li>
                  <a href="{{route('customer.password')}}">Change Password</a>
                </li>

                 <li>
                  <a href="#">Update</a>
                </li>
            </ul><!-- .breadcrumb -->
         </div>
          <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                     

                    <form class="form-horizontal" role="form" method="post"
                          action="{{route('password.update',Auth::guard('customer')->user()->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="npassword">New Password</label>
                            <div class="col-sm-9">
                                 <input type="password" name="npassword">
                                
                             </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="cpassword">Confirm Password</label>
                       
                            <div class="col-sm-9">
                                 <input type="password" name="cpassword" id="password">
                                  <input type="checkbox" id="checkbox">Show Password
                             </div>

                            </div>
                        

                        <div class="space-4"></div>


                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="submit">
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

@section('scripts')

<script>

$(document).ready(function(){
    $('#checkbox').on('change', function(){
        $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password"); 
    });
});

</script>

@endsection
