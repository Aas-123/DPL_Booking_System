@extends('customer.include customer.layout')

@section('title')
Home
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
                 
            </ul><!-- .breadcrumb -->

          </div>

           <div class="page-content">
            <div class="page-header">
                <h1>
                    Dashboard
                    <small>
                        <i class="icon-double-angle-right"></i>
                        overview &amp; stats
                    </small>
                </h1>
            </div><!-- /.page-header -->

             <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <div class="col-lg-6">
                    <div class="alert alert-block alert-success text-center" style="width: 100%;height: 70%;">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="icon-remove"></i>
                        </button>

                        <i class="icon-ok green"></i>

                        Your Token Number for </br>
                        Upcoming match is
                        </br>
                       
                         @foreach($seat as $sea)
                       @if(Auth::guard('customer')->id()== $sea->customer_id)
                        <strong class="green">
                            {{$token}}<br>
                            
                        </strong>
                          @endif
                        @endforeach
                     
                        
                    </div>
                      </div>
                      <div class="col-lg-6">
                    <div class="alert alert-block alert-success text-center" style="width: 100%;height: 70%;">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="icon-remove"></i>
                        </button>

                        <i class="icon-ok green"></i>

                        Your Seat_ Number for </br>
                        Upcoming match are
                        </br>
                          @foreach($seat as $sea)
                       @if(Auth::guard('customer')->id()== $sea->customer_id)
                      
                        <strong class="green">{{$sea->seat_number}} of {{$sea->Adderess}}<br>

                        </strong>
                        @endif
                        @endforeach

                        
                        
                    </div>
                      </div>
                   
       </div>




@endsection


