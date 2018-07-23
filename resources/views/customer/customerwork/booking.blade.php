@extends('customer.include customer.layout')

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

                <a href="{{'/customer/home'}}">Dashboard</a>
                  </li>

                <li>
                  <a href="{{route('customer.booking')}}">Booking</a>
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

                   <div class="box">
                     <div class="box-header with-border">
                       <h3 class="box-title">Booking Form</h3>
                            </div><!-- /.box-header -->
                              <div class="box-body">
                               
    

                                 <form id="form1" class="form-horizontal" role="form" method="post"
                          action="{{route('book.insert')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="feed_title">Address </label>
                            <div class="col-sm-9">
                                <input type="text" name="Address"  placeholder="Type your current Address" class="col-xs-10 col-sm-5" />
                                @if($errors->has('Address'))
                                    <span class="text-danger">*{{$errors->first('Address')}}</span> 
                                @endif
                               
                            </div>
                        </div>

                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="feed_title">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="Number" name="phone"  placeholder="Type your working phone number" class="col-xs-10 col-sm-5" />
                                 @if($errors->has('Phone_Number'))
                                    <span class="text-danger">*{{$errors->first('Phone_Number')}}</span> 
                                @endif
                               
                            </div>
                        </div>

                        <div class="space-4"></div>



                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title">Seat Number</label>
                            <div class="col-sm-9">
                                @include('customer.model.stadiumseat')
                                <input type="text" name="feed_title" id="seat-number" placeholder="click on it!!" class="col-xs-10 col-sm-5" data-toggle="modal" data-target="#exampleModal"  readonly="readonly"  />
                                @if($errors->has('feed_title'))
                                    <span id="ERROR" class="text-danger" style="display: none;">*{{$errors->first('feed_title')}}</span> 
                                @endif
                            </div>
                        </div>

                        <div class="space-4"></div>

                      <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title">Number Of Seat</label>
                            <div class="col-sm-9">
                                <input type="text" name="total_seat" id= "seats"  class="col-xs-10 col-sm-5" readonly="readonly" />
                                
                            </div>
                        </div>

                        <div class="space-4"></div>


                      <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="title">total Amount</label>
                            <div class="col-sm-9">
                                <input type="text" name="amt"   class="col-xs-10 col-sm-5" readonly="readonly" />
                               
                            </div>
                        </div>



                 
         
                         </div><!-- /.box-body -->
                             <div class="box-footer">
                                   
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

                              </div><!-- box-footer -->
                             </form>
                      </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
  </div>
            
@endsection

