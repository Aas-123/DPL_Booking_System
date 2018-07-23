@extends('admin.include admin.layout')

@section('title')
Booking
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
                	<a href="{{route('admin.bookstatus')}}">Booking status</a>
                </li>
            </ul><!-- .breadcrumb -->
         </div>
            <div class="page-content">
            <div class="page-header">
                <h1>
                    Tables
                    <small>
                        <i class="icon-double-angle-right"></i>
                       Booking Table
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
                                        <th class="center">id</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th> Phone_Number</th>
                                        <th>Seat Number</th>
                                        <th>Nu Of Seat</th>
                                        <th>Total Price</th>
                                        <th>Send Email</th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                        @foreach($bookstatus as $book)
                                        <tr>
                                        <td>{{$book->id}}</td>
                                        <td>{{$book->Adderess}}</td>
                                        <td>{{$book->email}}</td>
                                        <td>{{$book->Phone_Number}}</td>
                                        <td>{{$book->seat_number}}</td>
                                        <td>{{$book->no_of_seat}}</td>
                                         <td>{{$book->total_price}}</td>
                                         @if($book->status== 0)
                                        <td><a href="{{ route ('admin.mail',$book->id)}}"><i class="icon-check text-danger" style="font-size: 25px;"></i></a></td>
                                           @else
                                             <td><a href="#"><i class="icon-check text-success" style="font-size: 25px;"></i></a></td>
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


